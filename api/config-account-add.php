<?php
include_once 'functions.php';


$id = $_GET['name'];
$output = array();
$sql = "SELECT * FROM sb_accounts WHERE account_name = '".$id."'";
$result = $conn->query($sql);
  
  
if ($result->num_rows > 0) {
    $output['valid'] = 0;
		$output['message'] = 'Error: Name already exists';
}elseif(strlen($id) > 12 or strlen($id) < 3 ){
    $output['valid'] = 0;
		$output['message'] = 'Error: Not a valid username (Too long or too short)';
}elseif(!$result){
    $output['valid'] = 0;
		$output['message'] = 'Error: Not a valid username (Unvalid characters)';
}else{
		$sql2 = "INSERT INTO sb_accounts (account_name) VALUES ('".$id."')";
		$result2 = $conn->query($sql2);
		if($result2){
    $output['valid'] = 1;
		$output['message'] = 'Account added';
		}else{
    $output['valid'] = 0;
		$output['message'] = 'Error: Not a valid username (Unvalid characters)';
		}
}
echo json_encode($output);

