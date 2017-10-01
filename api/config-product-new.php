<?php
include_once 'functions.php';





// add a product to the console
if($_GET['product_id'] == 'XXXXXX'){
  if(strlen($_GET['product_name']) >= 2 && is_numeric($_GET['product_type']) && is_numeric($_GET['product_money'])){
    return 'OK';
  }else{
    return 'ERROR';
  }
  //$sql = "INSERT INTO sb_products (product_name, product_type, product_money) VALUES ('".$_GET['product']."')";
  //$result = $conn->query($sql);
}



