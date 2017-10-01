<?php
include_once 'functions.php';


$id = $_GET['id'];

if(is_numeric($id)){
  


$array = array();
$count = 0;
$sql = "SELECT * FROM sb_products WHERE product_id = ".$id." ORDER BY product_id DESC LIMIT 1";
$result = $conn->query($sql);
  
  
if ($result->num_rows > 0) {
    // output product
    while($row = $result->fetch_assoc()) {
    $array['product'] = $row;
    }
    
}
	
$sql = "SELECT * FROM sb_products_barcodes WHERE barcode_product = ".$id." ORDER BY barcode_id DESC";
$result = $conn->query($sql);
  
  
if ($result->num_rows > 0) {
    // output product
    while($row = $result->fetch_assoc()) {
    $array['barcode'][] = $row;
    }
    
}


echo json_encode($array);
}