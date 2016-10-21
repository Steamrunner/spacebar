<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once '../includes/inc_connect.php';

header('Content-type: application/json');

$init=true;

if(isset($_GET['limit']) && is_numeric($_GET['limit'])){
  $limit = $_GET['limit'];
}else{ 
  $limit = 1; 
}

echo '[';

$sql = "SELECT * FROM sb_logs WHERE log_json != '' ORDER BY log_id DESC LIMIT ".$limit;
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
  
  if($init){ $init = false; }else{ echo ","; }
  echo $row['log_json'];
  
}

echo ']';