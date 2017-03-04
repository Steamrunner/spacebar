<?php

// lets show errors, for debugging purposes
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// initialize
include_once 'functions.php';

$sort=0;

$sql = "SELECT account_id,account_amount,account_sort FROM sb_accounts ORDER BY account_amount DESC";
$result = $conn->query($sql);
          while($row = $result->fetch_assoc()) { 
						$query = "UPDATE sb_accounts SET account_sort = ".$sort." WHERE account_id = ".$row['account_id'];
      			$parse = $conn->query($query);
					$sort++;
					}


$sort=0;

$sql = "SELECT product_id,product_amount,product_sort FROM sb_products ORDER BY product_amount DESC";
$result = $conn->query($sql);
          while($row = $result->fetch_assoc()) { 
						$query = "UPDATE sb_products SET product_sort = ".$sort." WHERE product_id = ".$row['product_id'];
      			$parse = $conn->query($query);
					$sort++;
					}