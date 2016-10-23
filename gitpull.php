<?php
include_once 'includes/settings.php';
if(!$config['demo']){
$output = shell_exec('git pull 2>&1');
echo $output;
}
?>