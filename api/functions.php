<?php
include_once '../includes/config.php';

$servername = "159.253.0.27";
$username = "gfwysknm_sb";
$password = "spacebar";
$dbname = "gfwysknm_sb";

// Create connection
$conn = new mysqli($config['sql_server'], $config['sql_user'], $config['sql_passwd'], $config['sql_database']);
// Check connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// echo "Connected successfully";

function makedecimal($money){
  return number_format((float)$money, 2, '.', '');
}

function json_log($log){
  global $conn;
  global $config;
  $sql = "INSERT INTO sb_logs (log_time,log_type,log_json,log_message) VALUES ('".$log['timestamp']."','".$log['type']."','".json_encode($log)."','".$log['human']."')";
  $result = $conn->query($sql);
  if(!$config['demo']){

    $data = json_encode($log);
    $file = fopen('../'.$config['log_file'], "a");
    fwrite($file, "\n".$data.",");
    fclose($file);
  }
}
