<?php
include_once 'functions.php';

// initialize and check for parameters
$array = array();

if ($_GET['section'] == 'accounts'){
  
// fetch the logs from database
$sql = "SELECT * FROM sb_accounts ORDER BY account_sort ASC LIMIT 12";
$result = $conn->query($sql);

$html = '<table style="width:100%"><tr>
    <th><b>#</b></th>
    <th><b>Name</b></th> 
    <th><b>Credit</b></th>
    <th><b>Total Spent</b></th>
    <th><b>Used</b></th>
  </tr>';



if ($result->num_rows > 0) {
    // ALTER TABLE `sb_accounts` ADD `account_amount_money` DECIMAL(10,2) NOT NULL DEFAULT '0.00' AFTER `account_amount`;
    while($row = $result->fetch_assoc()) {
      $html .= '<tr><td>'.($row["account_sort"]+1).'</td><td>'.$row["account_name"].'</td><td>'.$row["account_money"].'</td><td>'.$row["account_amount_money"].'</td><td>'.$row["account_amount"].'</td></tr>';
    }
    
}


$html .= '</table>';
  
echo $html; 
}

if ($_GET['section'] == 'products'){
  
// fetch the logs from database
$sql = "SELECT * FROM sb_products ORDER BY product_sort ASC LIMIT 12";
$result = $conn->query($sql);

$html = '<table style="width:100%"><tr>
    <th><b>#</b></th>
    <th><b>Name</b></th> 
    <th><b>Price</b></th>
    <th><b>Used</b></th>
  </tr>';



if ($result->num_rows > 0) {
    // ALTER TABLE `sb_accounts` ADD `account_amount_money` DECIMAL(10,2) NOT NULL DEFAULT '0.00' AFTER `account_amount`;
    while($row = $result->fetch_assoc()) {
      $html .= '<tr><td>'.($row["product_sort"]+1).'</td><td>'.$row["product_name"].'</td><td>'.$row["product_price"].'</td><td>'.$row["product_amount"].'</td></tr>';
    }
    
}


$html .= '</table>';
  
echo $html; 
}