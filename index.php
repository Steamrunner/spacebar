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
	<script src="http:////code.jquery.com/jquery-2.1.4.js" type="text/javascript"></script>
	<script src="js/jquery-ui-1.11.4.custom/jquery-ui.js" type="text/javascript"></script>
</head>

<body class="scroll-assist">

	<div class="main-container">
		<section class="bg-dark page_start">
			<div class="container">
				
				<div class="row" style="margin-bottom:15px;">
					<div class="col-sm-7 part-tools">
						
					
						<h4 class="mb16 uppercase">Log</h4>
						<div class="logscreen">
							<div class="logscreen-content" style=""></div>
						</div>
						<h4 class="mb16 uppercase">Tools</h4>
						<div class="tools">
							<a class="btn btn-lg btn-filled" onClick="Abort('empty')">Abort</a><a class="btn btn-lg btn-filled" onClick="ViewSection('page_deposit')">deposit</a><a class="btn btn-lg btn-filled btn-grey" onClick="ViewSection('config')">config</a><a class="btn btn-lg btn-filled btn-grey">noob mode</a>
						</div>

					</div>
					<div class="col-sm-5">
						<h4 class="mb16 uppercase">Console</h4>
						<div class="console">
							<div class="console-content">
								<div style="height:205px;overflow:auto;border-bottom:3px solid #666;margin-bottom:5px;" class="console-list">
									<div style="clear:both;"></div>
								</div>
								<div style="clear:both;">
									<div style="float:left;"><input id="input"></div>
									<div style="display:inline-block;float:right;margin-right:10px;" class="console-total">-EUR 0.00</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-7 part-products">
						<h4 class="mb16 uppercase productlist-title">PRODUCTS</h4>
						<div class="productlist">Loading..
						</div>
					</div>
					<div class="col-sm-5 part-accounts">
						<h4 class="mb16 uppercase accountlist-title">ACCOUNTS</h4>
						<div class="accountlist">Loading..
						</div>
					</div>
				</div>
			</div>
		</section>



		<section class="bg-dark page_deposit">
			<div class="container">
				<div class="row">
					<div class="col-sm-6" style="margin-bottom:30px;">
						<h4 class="mb16 uppercase">DEPOSIT :: HOW MUCH?</h4>
						<a class="btn btn-sm btn-filled" onClick="InputAdd('7','input_deposit')">7</a>
						<a class="btn btn-sm btn-filled" onClick="InputAdd('8','input_deposit')">8</a>
						<a class="btn btn-sm btn-filled" onClick="InputAdd('9','input_deposit')">9</a>
						<a class="btn btn-lg btn-filled btn-green" onClick="InputChange('50','input_deposit')">50</a><br>
						<a class="btn btn-sm btn-filled" onClick="InputAdd('4','input_deposit')">4</a>
						<a class="btn btn-sm btn-filled" onClick="InputAdd('5','input_deposit')">5</a>
						<a class="btn btn-sm btn-filled" onClick="InputAdd('6','input_deposit')">6</a>
						<a class="btn btn-lg btn-filled btn-green" onClick="InputChange('20','input_deposit')">20</a><br>
						<a class="btn btn-sm btn-filled" onClick="InputAdd('1','input_deposit')">1</a>
						<a class="btn btn-sm btn-filled" onClick="InputAdd('2','input_deposit')">2</a>
						<a class="btn btn-sm btn-filled" onClick="InputAdd('3','input_deposit')">3</a>
						<a class="btn btn-lg btn-filled btn-green" onClick="InputChange('10','input_deposit')">10</a><br>
						<a class="btn btn-sm btn-filled" onClick="InputAdd('0','input_deposit')">0</a>
						<a class="btn btn-sm btn-filled" onClick="InputAdd('.','input_deposit')">.</a>
						<a class="btn btn-sm btn-filled" onClick="InputAdd('','input_deposit')">&#8612;</a>
						<a class="btn btn-lg btn-filled btn-green" onClick="InputChange('5','input_deposit')">5</a><br><br>
						<input id="input_deposit"><br><br><a class="btn btn-lg btn-filled next-p btn-red" onClick="Abort()">Abort</a><br><br>
					</div>
					<div class="col-sm-6" style="margin-bottom:30px;">
						<h4 class="mb16 uppercase deposit-accountlist-title"></h4>
						<div class="deposit-accountlist">Loading..</div>
					</div>
				</div>
			</div>
		</section>


		<section class="bg-dark config">
			<div class="row">
				<div class="col-sm-12">
					<h4 class="mb16 uppercase">config</h4>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<a class="btn btn-lg btn-filled btn-grey" onClick="ViewSection('config-products')">products</a>
					<a class="btn btn-lg btn-filled btn-grey" onClick="ViewSection('config-accounts')">accounts</a>
					<a class="btn btn-lg btn-filled btn-green" onClick="Optimize()">optimize</a>
					<a class="btn btn-lg btn-filled btn-green" onClick="Reload()">reload</a>
					<a class="btn btn-lg btn-filled btn-red" onClick="Abort()">Abort</a>
				</div>
			</div>
		</section>

		<section class="bg-dark config-products">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<h4 class="mb16 uppercase">
							Add or edit products
						</h4>
						<a class="btn btn-lg btn-filled btn-green" onClick="ViewSection('config-products-edit')">Add product</a><br>
						<a class="btn btn-lg btn-filled next-p btn-red" onClick="Abort()">Abort</a>
					</div>
					<div class="col-sm-6">
						<h4 class="mb16 uppercase config-productlist-title">products</h4>
						<div class="config-productlist">Loading..</div><br><br>
					</div>
				</div>
			</div>
		</section>

		<section class="bg-dark config-products-edit">
			<div class="row">
				<div class="col-sm-12">
					<h4 class="mb16 uppercase">GENERAL</h4>
					<input id="input_product_name"> PRODUCT NAME<br><br>
					
					<input type="radio" name="type" value="1" class="radio-option">&nbsp;&nbsp;BEVERAGE<br>
					<input type="radio" name="type" value="2" class="radio-option">&nbsp;&nbsp;ALCOHOLIC BEVERAGE<br>
					<input type="radio" name="type" value="3" class="radio-option">&nbsp;&nbsp;FOOD<br>
					<input type="radio" name="type" value="4" class="radio-option">&nbsp;&nbsp;OTHER<br>
					
					
					
					<br><br>
					<a class="btn btn-lg btn-filled btn-green" onClick="ViewSection('config-products-edit-money')">next</a>
					<a class="btn btn-lg btn-filled next-p btn-red" onClick="Abort()">Abort</a>
				</div>
			</div>
		</section>

		<section class="bd-dark config-products-edit-money">
			<div class="row">
				<div class="col-sm-6">
					<h4 class="mb16 uppercase">MONEY</h4>
					<input id="input_price"> EUR FOR THE SPACE<br><br>
					<a class="btn btn-lg btn-filled btn-green" onClick="ViewSection('config-products-edit-money-personal')">next</a>
					<a class="btn btn-lg btn-filled next-p btn-red" onClick="Abort()">Abort</a>
				</div>
			</div>
		</section>
		
		<section class="bd-dark config-products-edit-money-personal">
			<div class="row">
				<div class="col-sm-6">
					<h4 class="mb16 uppercase">PERSONAL GAIN</h4>
					<input id="input_donation"> EUR FOR <br><br><input id="input_donation_name"> (select account)<br><br>
					<a class="btn btn-lg btn-filled btn-green" onClick="ConfigProductEdit(this.form)">save</a>
					<a class="btn btn-lg btn-filled next-p btn-red" onClick="Abort()">Abort</a>
				</div>
				<div class="col-sm-6" style="margin-bottom:30px;">
						<h4 class="mb16 uppercase product-accountlist-title"></h4>
						<div class="product-accountlist">Loading..</div>
					</div>
			</div>
		</section>
		
		<section class="bg-dark config-products-edit-barcodes">
			<div class="row">
				<div class="col-sm-12">		
					<h4 class="mb16 uppercase">BARCODES</h4>
					<input id="input_newbarcode"><a class="btn btn-lg btn-filled next-p btn-green" onClick="Abort()">add</a>
					<div id="config_product_barcode"></div><br><br>
					<a class="btn btn-lg btn-filled btn-green" onClick="ViewSection('config-products-edit-money')">next</a>
					<a class="btn btn-lg btn-filled next-p btn-red" onClick="Abort()">Abort</a>
				</div>
			</div>
		</section>

		<section class="bg-dark config-accounts">
			<div class="row">
				<div class="col-sm-6">
					<h4 class="mb16 uppercase">name of the new account?</h4>
					<input id="input_account_name"><a class="btn btn-lg btn-filled btn-green" onClick="">ready</a><a class="btn btn-lg btn-filled btn-red" onClick="Abort()">Abort</a>
				</div>
				
			</div>
			<div class="row">
				<div class="col-sm-12">
				</div>
			</div>
		</section>
	</div>

	<script>


		// 
		// 	----------------------------
		//  INITIALIZE
		//  ----------------------------
		// 	

		ViewSection('page_start');

		// 
		// 	----------------------------
		//  GENERAL
		//  ----------------------------
		// 

		function GitPush() {
			$.ajax({
				cache: false,
				dataType: 'json',
				type: 'GET',
				timeout: 20000,
				url: '../spacebar-data/gitpush.php'
			});
		}

		function Reload() {
			ViewSection('none');
			$.ajax({
				cache: false,
				dataType: 'json',
				type: 'GET',
				timeout: 20000,
				url: 'gitpull.php'
			});
			setTimeout(function() {
				location.reload();
			}, 7000);
		}


		function Abort($type = '') {
			if ($type == 'empty') {
				ConsoleAction('empty');
			}
			ViewSection('page_start');
			$(function() {
				$('input').val(''); // empty all inputboxes
			});
		}

		function ViewSection($screen = 'page_start') {
			$("section").hide();
			$("." + $screen).show();
			if ($screen == 'page_start') {
				GetProductList(undefined, undefined, 'productlist', 'add');
				GetAccountList(undefined, undefined, 'accountlist', 'buy');
				ConsoleRead();
			}
			if ($screen == 'page_deposit') {
				GetAccountList(undefined, undefined, 'deposit-accountlist', 'deposit');
			}
			if ($screen == 'config-products') {
				GetProductList(0, 20, 'config-productlist', 'config-product-edit');
			}
			if ($screen == 'config-products-edit-money') {
				GetAccountList(undefined, undefined, 'product-accountlist', 'product');
			}
		}

		function InputAdd($add = '', $input = '') {
			var text = $("#" + $input);
			text.val(text.val() + $add);
			if ($add == '') {
				text.val(text.val().slice(0, -1));
			}
			document.getElementById($input).focus();
		}


		function InputChange($change = '', $input = '') {
			var text = $("#" + $input);
			text.val($change);
			document.getElementById($input).focus();
		}

		function Optimize(){
			ViewSection('none');
			$.ajax({
				cache: false,
				dataType: 'json',
				type: 'GET',
				timeout: 20000,
				url: 'api/optimize.php'
			});
			setTimeout(function() {
				location.reload();
			}, 7000);
			
		}

		// 
		// 	----------------------------
		//  INPUT
		//  ----------------------------
		// 

		function ConsoleBarcode() {
			$input = $('#input').val();
			$('#input').val('');
			$.ajax({
				cache: false,
				data: {
					type: 'add-barcode',
					barcode: $input
				},
				dataType: 'json',
				type: 'GET',
				timeout: 20000,
				url: 'api/console.php'
			});
			ConsoleRead();
		}

		function ConsoleAction($type = '', $product = 0, $account = 0, $amount = 0) {
			if ($type == 'deposit') {
				deposit_amount = $('#input_deposit').val();
				$('#input_deposit').val('');
				$amount = deposit_amount;
				ViewSection('page_start');
			}
			$.ajax({
					cache: false,
					data: {
						type: $type,
						product: $product,
						account: $account,
						amount: $amount,
						session: 1
					},
					dataType: 'json',
					type: 'GET',
					timeout: 20000,
					url: 'api/console.php'
				})
				.fail(function() {
					ConsoleRead();
				})
				.done(function(data) {
					ConsoleRead();
					if ($type == 'deposit' || $type == 'buy') {
						GitPush();
					}
				});
		}

		function ConfigProductEdit(form) {
			alert('test');
			$.ajax({
					cache: false,
					data: {
						type: 'write',
					},
					dataType: 'json',
					type: 'GET',
					timeout: 20000,
					url: 'api/config-product-new.php'
				})
				.done(function(data) {
					var consolelist = '';
					$.each(data, function(index, e) {});
				});
		}


		// 
		// 	----------------------------
		//  OUTPUT
		//  ----------------------------
		// 


		function GetProductList($page = 0, $quantity = 19, $div = "productlist", $action = "add") {
			$.ajax({
					cache: false,
					data: {
						page: $page,
						quantity: $quantity
					},
					dataType: 'json',
					type: 'GET',
					timeout: 20000,
					url: 'api/products.php'
				})
				.done(function(data) {
					var html = '';
					$.each(data, function(index, e) {
						if (index == 'next') {
							page_next = e;
						} else if (index == 'total') {
							page_total = e;
						} else {
							html += '<a class="btn btn-lg btn-filled';
							if (e.product_type == 3) {
								html += ' btn-green';
							} else if (e.product_type == 2) {
								html += ' btn-red';
							}
							if ($action == "add") {
								html += '" onClick="ConsoleAction(\'add\',' + e.product_id + ')">' + e.product_name + '</a>';
							} else if ($action == "config-product-edit") {
								html += '" onClick="ConfigProductRead(' + e.product_id + ')">' + e.product_name + '</a>';
							}
						}
					});
					html += '<a class="btn btn-lg btn-filled next-p btn-green" onClick="GetProductList(' + page_next + ',' + $quantity + ',\'' + $div + '\',\'' + $action + '\')">&#8658;</a>';
					$("." + $div).html(html);
					$("." + $div + "-title").html("Products " + ($page + 1) + "/" + page_total);
				});
		}

		function GetAccountList($page = 0, $quantity = 14, $div = "accountlist", $action = 'buy') {
			$.ajax({
					cache: false,
					data: {
						page: $page,
						quantity: $quantity
					},
					dataType: 'json',
					type: 'GET',
					timeout: 20000,
					url: 'api/accounts.php'
				})
				.done(function(data) {
					var html = '';

					$.each(data, function(index, e) {
						if (index == 'next') {
							page_next = e;
						} else if (index == 'total') {
							page_total = e;
						} else {
							html += '<a class="btn btn-lg btn-filled btn-blue" onClick="ConsoleAction(\'' + $action + '\',undefined,' + e.account_id + ')">' + e.account_name + '</a>';
						}
					});

					html += '<a class="btn btn-lg btn-filled btn-blue" onClick="GetAccountList(' + page_next + ',' + $quantity + ',\'' + $div + '\',\'' + $action + '\')">&#8658;</a>';
					$("." + $div).html(html);
					$("." + $div + "-title").html("Accounts " + ($page + 1) + "/" + page_total);
				});
		}

		function ConsoleRead() {
			$.ajax({
					cache: false,
					data: {
						type: 'read',
						session: 1
					},
					dataType: 'json',
					type: 'GET',
					timeout: 20000,
					url: 'api/console.php'
				})
				.done(function(data) {
					var consolelist = '';
					$.each(data, function(index, e) {
						if (index == 'price') {
							$(".console-total").html('EUR ' + e);
						} else {
							consolelist += '<div style="clear:both;"><div style="float:left;">' + e.amount + ' x ' + e.console_product + '</div><div style="display:inline-block;float:right;margin-right:10px;">EUR ' + e.price + '</div></div>';
						}
					})
					$(".console-list").html(consolelist);
				});
			
			$.ajax({
					cache: false,
					data: {
						amount: 7
					},
					dataType: 'json',
					type: 'GET',
					timeout: 20000,
					url: 'api/log_read.php'
				})
				.done(function(data) {
					var loglist = '';
					$.each(data, function(index, e) {
						loglist = e + '<br>' + loglist;

					});
					$(".logscreen-content").html(loglist);
				});
		}

		function ConfigProductRead($id = 1) {
			ViewSection('config-products-edit');
			$.ajax({
					cache: false,
					data: {
						type: 'read',
						id: $id
					},
					dataType: 'json',
					type: 'GET',
					timeout: 20000,
					url: 'api/config-product.php'
				})
				.done(function(data) {
					$.each(data, function(index, e) {
						if (index == 'product') {
						var text = $("#input_product_name");
						text.val(e.product_name);
						
						var text = $("#input_product_type");
						text.val(e.product_type);
						}
						
						if (index=='barcode'){
							var html = '';
							$.each(e, function(indax, a) {
								html += '<input id="input_barc" value="';
								html += a.barcode_code;
								html += '" disabled><a class="btn btn-lg btn-filled next-p btn-red" onClick="Abort()">remove</a><br>';
								$("#config_product_barcode").html(html);
							});
						}
						
						
					});
				});
		}

		// 
		// 	----------------------------
		//  CONFIG-PRODUCTS
		//  ----------------------------
		// 


		// 
		// 	----------------------------
		//  CONFIG-ACCOUNTS
		//  ----------------------------
		//
	</script>







</body>

</html>