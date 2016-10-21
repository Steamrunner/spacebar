<?php
include_once '../includes/inc_connect.php';

$page = $_GET['page'];
$quantity = $_GET['quantity'];

if(strlen($page) < 3 && is_numeric($page) && strlen($quantity) < 3 && is_numeric($quantity)){
  
$start = $page * $quantity;  

$array = array();
$count = 0;

$sql = "SELECT * FROM sb_accounts WHERE account_id > ".$start." ORDER BY account_sort ASC LIMIT ".$quantity;
$result = $conn->query($sql);
  
  
if ($result->num_rows > 0) {
    // output accounts
    while($row = $result->fetch_assoc()) {
    $array[$count] = $row;
    $count++;
    }
    $sql2 = "SELECT account_id FROM sb_accounts";
    $result2 = $conn->query($sql2);
    $pages = ($result2->num_rows)/$quantity;
    $array['total'] = ceil($pages);
    if($pages>($page+1)){
      $array['next'] = ($page+1);
    }else{$array['next'] = 0;}
    echo json_encode($array);
}



}