<?php

function makedecimal($money){
  return number_format((float)$money, 2, '.', '');
}

function json_log($log){
  global $conn;
  $sql = "INSERT INTO sb_logs (log_time,log_type,log_json,log_message) VALUES ('".$log['timestamp']."','".$log['type']."','".json_encode($log)."','".$log['human']."')";
  $result = $conn->query($sql);
  
  $data = json_encode($log);
  $file = fopen("../../spacebar-data/data.json", "a");
  fwrite($file, "\n".$data.",");
  fclose($file);
}
