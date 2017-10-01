<?php
include_once 'functions.php';

$array = array();
$count = 0;
$sql = "SELECT * FROM sb_products ORDER BY product_id ASC";
$result = $conn->query($sql);
  
  
if ($result->num_rows > 0) {
    // output product
    while($row = $result->fetch_assoc()) {
    $array[] = $row;
    }
    
}

echo json_encode($array);
