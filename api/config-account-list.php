<?php
include_once 'functions.php';


$id = $_GET['id'];


$output = array();

if(isset($id)){
$sql = "SELECT * FROM sb_accounts WHERE account_id = '".$id."' ORDER BY account_sort ASC";
}else{
$sql = "SELECT * FROM sb_accounts ORDER BY account_sort ASC";
}

$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
	$output[] = $row;
}

echo json_encode($output);


