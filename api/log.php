<?php
include_once '../includes/inc_connect.php';

// initialize and check for parameters
$array = array();
$amount = '5';
if(is_numeric($_GET['amount'])){
  $amount = $_GET['amount'];
}


// fetch the logs from database
$sql = "SELECT * FROM sb_logs WHERE log_message != '' ORDER BY log_time DESC LIMIT ".$amount;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // return logs
    while($row = $result->fetch_assoc()) {
    $array[] = date("d/m H:i:s",$row['log_time'])." > ".$row['log_message'];
    }
    echo json_encode($array);
}


