<?php
/*

console.php

USE:
type =  add = add product to cart
        add-barcode = add product to cart from barcode
        buy = account-id buys all products in cart
        deposit = add a certain amount of money to an account
        check = check account money
        empty = empty cart

*/

// lets show errors, for debugging purposes
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// initialize
include_once 'functions.php';

$output = array();
$data = array();
$data['timestamp'] = time();
$data['type'] = 'undefined';

// no type, no party
if(!isset($_GET['type']) || !is_numeric($_GET['session'])){
  die("undefined");
}

// empty the console
if($_GET['type'] == 'empty'){
  $sql = "TRUNCATE TABLE sb_console";
  $result = $conn->query($sql);
}

// add a product to the console
if($_GET['type'] == 'add' && is_numeric($_GET['product'])){
  $sql = "INSERT INTO sb_console (console_product) VALUES ('".$_GET['product']."')";
  $result = $conn->query($sql);
}


// add a product to the console based on the barcode
if($_GET['type'] == 'add-barcode' && isset($_GET['barcode'])){
  $barcode = str_replace('%0D.1','',$_GET['barcode']);
  $barcode = str_replace('%0D','',$barcode);
  $sql = "SELECT barcode_product FROM sb_products_barcodes WHERE barcode_code = ".$barcode;
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  $count = $cart->num_rows;
  if($count > 0){
  $sql = "INSERT INTO sb_console (console_product) VALUES ('".$row['barcode_product']."')";
  $result = $conn->query($sql);
  }
}


// finally, the buy code, handle with care!
if($_GET['type'] == 'buy' && is_numeric($_GET['account'])){
  
      // initialize
      $data['type'] = 'buy';
      $data['products_totalprice'] = 0;
      $data['products_amount'] = 0;
      $products_price = 0;
      $count = 0;

      // read products in the console
      $sql = "SELECT console_product FROM sb_console";
      $cart = $conn->query($sql);
      $count = $cart->num_rows;
  
      if($count == 0){
        $sql = "SELECT account_id,account_name,account_money FROM sb_accounts WHERE account_id = ".$_GET['account']." LIMIT 1";
        $result = $conn->query($sql);
        $account = $result->fetch_assoc();
        $data['type'] = 'check';
        $data['account'] = $account;
        $data['human'] = $data['account']['account_name']." has EUR ".makedecimal($data['account']['account_money'])." left";
        // aaaaaaaaand log the data
        json_log($data);
      }else{
  
      // go trough every single product in the console
      foreach ($cart as $k => $v) {
          $sql = "SELECT product_id,product_name,product_price,product_type FROM sb_products WHERE product_id = ".$v['console_product'];
          $result = $conn->query($sql);
          while($row = $result->fetch_assoc()) { 
            $product = $row;
            $products_price = $products_price + $row['product_price']; // get total cost
          } 
          /* do we want to add the barcodes to the log??
          $sql = "SELECT barcode_code FROM sb_products_barcodes WHERE barcode_product = ".$v['console_product'];
          $result = $conn->query($sql);
          while($row = $result->fetch_assoc()) { 
            $product['barcodes'][] = $row['barcode_code'];
          }*/
          $data['products'][] = $product;
          $sql = "SELECT target_account,target_amount FROM sb_products_targets WHERE target_product = ".$v['console_product'];
          $result = $conn->query($sql);
          while($row = $result->fetch_assoc()) { 
            $targets[] = $row;
          }
          $sql = "UPDATE sb_products SET product_amount = product_amount+1 WHERE product_id = ".$v['console_product'];
          $result = $conn->query($sql);
      }
      $data['products_totalprice'] = $products_price;
      $data['products_amount'] = $count; // get total amount of products

  
      // fetch account info (single accounts only)
      $sql = "SELECT account_id,account_name,account_money FROM sb_accounts WHERE account_id = ".$_GET['account']." LIMIT 1";
      $result = $conn->query($sql);
      $account = $result->fetch_assoc();

      // calculate account info (single accounts only)
      $account['account_money_take'] = $data['products_totalprice'];
      $account['account_money_after'] = $account['account_money']+$data['products_totalprice'];
      $data['takefrom'][] = $account;

      // take money from accounts (multi-account supported)
      foreach ($data['takefrom'] as $k => $v) {
      $sql = "UPDATE sb_accounts SET account_money = ".$v['account_money_after']." WHERE account_id = ".$v['account_id'];
      $result = $conn->query($sql);
      $sql = "UPDATE sb_accounts SET account_amount = account_amount+1 WHERE account_id = ".$v['account_id'];
      $result = $conn->query($sql);
      $sql = "UPDATE sb_accounts SET account_amount_money = account_amount_money-".$account['account_money_take']." WHERE account_id = ".$v['account_id'];
      $result = $conn->query($sql);
      }
           
      // give money to the product owners
      if(isset($targets)){
        
      foreach ($targets as $k => $v) {
          $sql = "SELECT account_id,account_name,account_money FROM sb_accounts WHERE account_id = ".$v['target_account']." LIMIT 1";
          $result = $conn->query($sql);
          while($target = $result->fetch_assoc()) { 
            $target['account_money_give'] = $v['target_amount'];
            $target['account_money_after'] = $v['target_amount']+$target['account_money'];
            $sql2 = "UPDATE sb_accounts SET account_money = ".$target['account_money_after']." WHERE account_id = ".$v['target_account']." LIMIT 1";
            $result2 = $conn->query($sql2);
            $data['giveto'][] = $target;
          }
      }
      }

      // TODO: insert validations of the transaction, just a few checks to prevent impurities

      // empty the console
      $sql = "TRUNCATE TABLE sb_console";
      $result = $conn->query($sql);

      // make a human readable string (single accounts only)
      $human = $account['account_name'].$db."";
      if($data['products_amount']>=2){
      $human .= " bought ".$count." products (".makedecimal($data['products_totalprice']).") and";
      }elseif($data['products_amount']==1){
      $human .= " bought 1 product (".makedecimal($data['products_totalprice']).") and";
      }
      $human .= " has EUR ".makedecimal($data['takefrom'][0]['account_money_after'])." left";
      $data['human'] = $human;

      // aaaaaaaaand log the data
      json_log($data);
        
      }
}

if($_GET['type'] == 'check'){

}

if($_GET['type'] == 'deposit' && is_numeric($_GET['account']) && is_numeric($_GET['amount'])){
  
  //initialize
  $data['type'] = 'deposit';
  
  // get account info
  $sql = "SELECT account_id,account_name,account_money FROM sb_accounts WHERE account_id = ".$_GET['account']." LIMIT 1";
  $result = $conn->query($sql);
  $account = $result->fetch_assoc();
  
  $total = $account['account_money'] + $_GET['amount'];
  
  $sql = "UPDATE sb_accounts SET account_money = ".$total." WHERE account_id = ".$account['account_id'];
  $result = $conn->query($sql);
  
  
  $account['give'] = makedecimal($_GET['amount']);
  $data['giveto'][] = $account;
  
  // make a human readable string
  $human = $account['account_name']." deposited EUR ".makedecimal($_GET['amount'])." and has now EUR ".makedecimal($total);
  $data['human'] = $human;
  
  // aaaaaaaaand log the data
  json_log($data);
}


if($_GET['type'] == 'read'){
  
  //dirty code to read the console content, needs cleaning up
  $sql = "SELECT *, COUNT(console_product) as 'amount' FROM sb_console GROUP BY console_product ORDER BY console_id DESC";
  $result = $conn->query($sql);
  $count = 0;
  $price = 0.00;
  while($row = $result->fetch_assoc()) {
        $output[$count]['amount'] = $row['amount'];
        $sql2 = "SELECT * FROM sb_products WHERE product_id = ".$row['console_product'];
        $result2 = $conn->query($sql2);
        while($row2 = $result2->fetch_assoc()) { 
          $output[$count]['console_product'] = $row2['product_name'];
          $product_price = ($row2['product_price']*$row['amount']);
          $product_price = makedecimal($product_price);
          $output[$count]['price'] = $product_price; 
          $price+=$product_price;
        }
    $count++;
  }
  $output['price'] = makedecimal($price);
}




echo json_encode($output);

