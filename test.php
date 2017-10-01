<?php

include_once 'includes/config.php';

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

if(isset($_POST['submit'])){
	
	
	
}

if(is_numeric($_GET['id'])){
	$id = $_GET['id'];
}else{
	die('FATAL ERROR: strange product id');
}
  
// get products info
$sql = "SELECT * FROM sb_products WHERE product_id = '".$id."' LIMIT 1";
$result = $conn->query($sql);
if($result){
	$row = $result->fetch_assoc();
}else{
	die('FATAL ERROR: strange product id');
}

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" dir="ltr">
<!-- tst22 -->

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>SpaceBar</title>
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/theme-orange.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/custom.css" rel="stylesheet" type="text/css" media="all" />
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400%7CRaleway:100,400,300,500,600,700%7COpen+Sans:400,500,600' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css" type="text/css" />
	<script src="http://code.jquery.com/jquery-2.1.4.js" type="text/javascript"></script>
	<script src="js/jquery-ui-1.11.4.custom/jquery-ui.js" type="text/javascript"></script>
</head>

<body class="scroll-assist">
<!-- Main content -->
<div class="main-container">
		<section class="bg-dark page_start">
			<div class="container">  
	<div class="row">
		<div class="col-sm-12 col-md-12 col-lg-12">
					<form action="admin_spacebar_product.php?id=<?php echo $id; ?>" id="addForm" method="post" novalidate>
						<div class="form-group">
							<label class="control-label" for="id">Product ID</label>
							<input type="text" placeholder="Product ID" required="" value="<?php if(isset($row['product_id'])){ echo $row['product_id']; } ?>" name="id" id="id" class="form-control" disabled="disabled">
						</div>
						<div class="form-group">
							<label class="control-label" for="name">Product Name</label>
							<input type="text" placeholder="Name" title="Please enter the name" required="" value="<?php if(isset($row['product_name'])){ echo $row['product_name']; } ?>" name="name" id="name" class="form-control">
						</div>
						<div class="form-group">
							<label class="control-label" for="price">Price</label>
							<input type="text" placeholder="Price" required="" value="<?php if(isset($row['product_price'])){ echo $row['product_price']; } ?>" name="price" id="price" class="form-control">
							<small id="Help" class="text-muted">Remember: This must be a negative value, don't forget the minus sign in front of the decimal number!</small>
						</div>
						<div class="form-group">
							<label for="exampleSelect1">Product Type</label>
							<select class="form-control" id="exampleSelect1">
                <option value="1" <?php if($row['product_type'] == 1){ echo 'selected'; } ?>>Normal beverage</option>
								<option value="2" <?php if($row['product_type'] == 2){ echo 'selected'; } ?>>Alcoholic beverage</option>
								<option value="3" <?php if($row['product_type'] == 3){ echo 'selected'; } ?>>Food</option>
								<option value="0" <?php if($row['product_type'] == 0){ echo 'selected'; } ?>>Hidden</option>
              </select>
						</div>
						<div class="form-group">
							<button name="submit" id="submit" class="btn btn-primary">Edit Product</button>
						</div>

					</form>
		</div>

        </div></div>


  </section></div>

  </body>
</html>