<?php
include_once 'includes/config.php';
if($config['demo']){
}else{
$output = shell_exec('git pull 2>&1');
echo $output;
}
?>