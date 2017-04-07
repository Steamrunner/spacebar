<?php
include_once 'functions.php';

$page = $_GET['page'];
$quantity = $_GET['quantity'];

if(strlen($page) < 3 && is_numeric($page) && strlen($quantity) < 3 && is_numeric($quantity)){
  
$start = $page * $quantity;  

$array = array();
$count = 0;

$sql = "SELECT * FROM sb_products WHERE product_id > ".$start." and product_type != 0 ORDER BY product_sort ASC LIMIT ".$quantity;
$result = $conn->query($sql);
  
  
if ($result->num_rows > 0) {
    // output products
    while($row = $result->fetch_assoc()) {
      if($row['product_type'] == 3){
        $array[$count+1000] = $row;
      }elseif($row['product_type'] == 2){
        $array[$count+500] = $row;
      }else{
        $array[$count] = $row;
      }
    
    $count++;
    }
    $sql2 = "SELECT product_id FROM sb_products";
    $result2 = $conn->query($sql2);
    $pages = ($result2->num_rows)/$quantity;
    $array['total'] = ceil($pages);
    if($pages>($page+1)){
      $array['next'] = ($page+1);
    }else{$array['next'] = 0;}
    echo json_encode($array);
}



}