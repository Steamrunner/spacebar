<?php
include_once 'includes/config.php';
if(!$config['demo']){
$output = shell_exec('printf "\x0C'.$_GET['msg'].'" > /dev/ttyS0');
echo $output;
}
?>
