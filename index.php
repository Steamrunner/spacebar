<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" dir="ltr"> <!-- tst22 -->

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>Spacebar</title>
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
		            <div class="row">
		                <div class="col-sm-7 part-products">
												<h4 class="mb16 uppercase productlist-title">PRODUCTS</h4>
		                    <div class="productlist">Loading..
		                    </div>
		                </div>
		                <div class="col-sm-5 part-accounts">
		                    <h4 class="mb16 uppercase accounttitle">ACCOUNTS</h4>
		                    <div class="accountlist">Loading..
		                    </div>
		                </div>
		            </div>
		          <div class="row">
									<div class="col-sm-7 part-tools">
										<h4 class="mb16 uppercase">Log</h4>
										<div class="logscreen">
											<div class="logscreen-content" style=""></div>
										</div>
										<h4 class="mb16 uppercase">Tools</h4>
										<div class="tools">
										<a class="btn btn-lg btn-filled" onClick="abort('empty')">abort</a><a class="btn btn-lg btn-filled" onClick="ViewSection('page_deposit')">deposit</a><a class="btn btn-lg btn-filled btn-grey" onClick="ViewSection('page_config')">config</a><a class="btn btn-lg btn-filled btn-grey">noob mode</a>	
										</div>
										
									</div>
									<div class="col-sm-5">
										<h4 class="mb16 uppercase">Console</h4>
										<div class="console">
												<div class="console-content">
													<div style="height:205px;overflow:auto;border-bottom:3px solid #666;margin-bottom:5px;" class="console-list">
													<div style="clear:both;">...</div>
													</div>
													<div style="clear:both;"><div style="float:left;"><input id="input"></div><div style="display:inline-block;float:right;margin-right:10px;" class="console-total">-EUR 0.00</div>
												</div>
											</div>
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
							
							
								<a class="btn btn-sm btn-filled" onClick="AddToInput('7','input_deposit')">7</a>
								<a class="btn btn-sm btn-filled" onClick="AddToInput('8','input_deposit')">8</a>
								<a class="btn btn-sm btn-filled" onClick="AddToInput('9','input_deposit')">9</a><br>
								<a class="btn btn-sm btn-filled" onClick="AddToInput('4','input_deposit')">4</a>
								<a class="btn btn-sm btn-filled" onClick="AddToInput('5','input_deposit')">5</a>
								<a class="btn btn-sm btn-filled" onClick="AddToInput('6','input_deposit')">6</a><br>
								<a class="btn btn-sm btn-filled" onClick="AddToInput('1','input_deposit')">1</a>
								<a class="btn btn-sm btn-filled" onClick="AddToInput('2','input_deposit')">2</a>
								<a class="btn btn-sm btn-filled" onClick="AddToInput('3','input_deposit')">3</a><br>
								<a class="btn btn-sm btn-filled" onClick="AddToInput('0','input_deposit')">0</a>
								<a class="btn btn-sm btn-filled" onClick="AddToInput('.','input_deposit')">.</a>
								<a class="btn btn-sm btn-filled" onClick="AddToInput('','input_deposit')"><-</a><br><br>
									<input id="input_deposit"><a class="btn btn-lg btn-filled next-p btn-red" onClick="abort()">Abort</a><br><br>
						</div>
						<div class="col-sm-6" style="margin-bottom:30px;">
							<h4 class="mb16 uppercase">DEPOSIT :: TO ACCOUNT?</h4>
							<div class="accountlist">Loading..</div>
						</div>
						</div>      
					</div>
				</section>
			
			
			
			

			

			
			
			<section class="bg-dark page_config">
				<div class="row">
						<div class="col-sm-12">
							<h4 class="mb16 uppercase">config</h4>
						</div>
				</div>
				<div class="row">
						<div class="col-sm-12">
							<a class="btn btn-lg btn-filled btn-grey" onClick="ViewSection('page_config_products')">PRODUCTS</a>
							<a class="btn btn-lg btn-filled btn-grey" onClick="ViewSection('page_add_account')">ACCOUNTS</a>
							<a class="btn btn-lg btn-filled btn-red" onClick="abort()">abort</a>
						</div>
				</div>
			</section>
			
			<section class="bg-dark page_config_products">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
						<h4 class="mb16 uppercase">
							Lets add or edit some products
						</h4>
						<h4 class="mb16 uppercase config-products-title">PRODUCTS</h4>
						<div class="config-products">Loading..</div>
						</div>
					</div>
				</div>
			</section>
			
			<section class="bg-dark page_config_products_add">
				<div class="row">
						<div class="col-sm-12">
							<h4 class="mb16 uppercase">LETS ADD A PRODUCT</h4>
							<input id="input_product_name"> PRODUCT NAME<br><br>
							<input id="input_product_barcode"> BARCODE<br><br>
							<input id="input_product_type"> PRODUCT TYPE<br><br>
						</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
					<h4 class="mb16 uppercase">MONEY 8!!!!!888!!888!!!!8!!</h4>
					<input id="input_price"> EUR DONATED TO THE SPACE<br><br>
					<input id="input_donation1"> EUR DONATED TO <input id="input_deposit"> (OPTIONAL, FOR SPACESHOP)<br><br>
					<input id="input_donation2"> EUR DONATED TO <input id="input_deposit"> (OPTIONAL, FOR SPACESHOP)<br><br>
					</div>
				</div>
			</section>
			
			<section class="bg-dark page_add_account">
				<div class="row">
						<div class="col-sm-12">
							<h4 class="mb16 uppercase">what's the name of the new account?</h4>
							<input id="input_account_name"><a class="btn btn-lg btn-filled btn-green" onClick="">ready</a><a class="btn btn-lg btn-filled btn-red" onClick="abort()">abort</a>
						</div>
				</div>
				<div class="row">
						<div class="col-sm-12">
						</div>
				</div>
			</section>
		</div>
			
<script>
	
	// http://api.icndb.com/jokes/random?limitTo=[nerdy]&firstName=John&lastName=Doe

// define the html section that we are viewing
ViewSection('page_start');
GitPull();
// always keep the input form in focus (so barcode scanners can be used)
function CronJob(){
	if (!$("#input").is(':focus')){
	document.getElementById("input").focus();
	}
	ConsoleAction('read');
	GetLogscreen();
}
setInterval(CronJob,2000);
	
$(document).keydown(function (e) {
    if ($("#input:focus") && (e.keyCode === 13)) {
       	//code
			 	e.keyCode = '';
				$(function(){
					BarcodeToConsole();
				});
    }
});

function GetLogscreen($amount = 7) {
	$.ajax({
		cache: false,data: {amount: $amount},
		dataType: 'json',type: 'GET',timeout: 20000,url: 'api/log_read.php'
	})
	.done(function(data) {
		var loglist = '';
		$.each(data, function(index, e) {
			loglist = e + '<br>' + loglist;
			
		});
		$( ".logscreen-content" ).html(loglist);
	});
}

	
function BarcodeToConsole() {
	$input = $('#input').val();
	$('#input').val('');
	$.ajax({
		cache: false,data: {type:'add-barcode',barcode: $input},
		dataType: 'json',type: 'GET',timeout: 20000,url: 'api/console.php'
	});
	ConsoleAction('read');
}
	
function GitPush(){
	$.ajax({
		cache: false,
		dataType: 'json',type: 'GET',timeout: 20000,url: '../spacebar-data/gitpush.php'
	});
}
	
function GitPull(){
	$.ajax({
		cache: false,
		dataType: 'json',type: 'GET',timeout: 20000,url: 'includes/gitpull.php'
	});
}
	
	
function ViewSection($screen = 'page_start'){
	$(".page_start").hide();
	$(".page_deposit").hide();
	$(".page_deposit2").hide();
	$(".page_noob").hide();
	$(".page_config_products_add").hide();
	$(".page_config_products").hide();
	$(".page_config").hide();
	$(".page_add_account").hide();
	$("."+$screen).show();
	GetProductList();	
	GetAccountList();
	ConsoleAction('read');
	GetLogscreen();
	
	if($screen == 'page_deposit'){
  GetAccountList(undefined,undefined,'deposit');
	}
	if($screen == 'page_config_products'){
  GetProductList(undefined,40,'config-products','edit');
	}
}

function AddToInput($add = '',$input = ''){
	var text = $("#"+$input);
  text.val(text.val() + $add);  
	if($add == ''){
		text.val(text.val().slice(0,-1));  
	}
	document.getElementById($input).focus();
}
	


function GetProductList($page = 0,$quantity = 19,$div = "productlist",$action = "addtoconsole") {
	var productlist_next = 0;
	var productlist_total = 0;
	$.ajax({
		cache: false,data: {page: $page,quantity: $quantity},
		dataType: 'json',type: 'GET',timeout: 20000,url: 'api/products.php'
	})
	.done(function(data) {
		var productlist = '';
		$.each(data, function(index, e) {
			if(index=='next'){
				productlist_next = e;
			}else if(index=='total'){
				productlist_total = e;
			}else{
				productlist += '<a class="btn btn-lg btn-filled';
				if(e.product_type==3){
				productlist += ' btn-green';
				}else if(e.product_type==2){ 
				productlist += ' btn-red';
				}
				if($action == "addtoconsole"){
				productlist += '" onClick="ConsoleAction(\'add\','+e.product_id+')">'+e.product_name+'</a>';
				}
			}
		});
		productlist += '<a class="btn btn-lg btn-filled next-p btn-green" onClick="GetProductList('+productlist_next+','+$quantity+',\''+$div+'\',\''+$action+'\')">&#8658;</a>';
		$("."+$div).html(productlist);
	  $("."+$div+"-title").html("Products "+($page+1)+"/"+productlist_total);
	});
}

function GetAccountList($page = 0,$quantity = 14, $style = 'normal') {
	var accountlist_next = 0;
	var accountlist_total = 0 ;
	$.ajax({
		cache: false,data: {page: $page,quantity: $quantity},
		dataType: 'json',type: 'GET',timeout: 20000,url: 'api/accounts.php'
	})
	.done(function(data) {
		var accountlist = '';
		$.each(data, function(index, e) {
			if(index=='next'){
			accountlist_next = e;
			}else if(index=='total'){
			accountlist_total = e;
			}else{
			accountlist += '<a class="btn btn-lg btn-filled btn-blue" onClick="ConsoleAction(';
				if($style == 'deposit'){
					accountlist += "'deposit'";
				}else{
					accountlist += "'buy'";
				}
			accountlist += ',undefined,'+e.account_id+')">'+e.account_name+'</a>';
			}
		});
		accountlist += '<a class="btn btn-lg btn-filled btn-blue" onClick="GetAccountList('+accountlist_next+','+$quantity+',\''+$style+'\')">&#8658;</a>';
		$(".accountlist").html(accountlist);
		$(".accounttitle").html("Accounts "+($page+1)+"/"+accountlist_total);
	});
}
	
function ConsoleAction($type = 0,$product = 0,$account = 0,$amount = 0){
	if($type == 'deposit'){
		deposit_amount = $('#input_deposit').val();
	  $('#input_deposit').val('');
		$amount = deposit_amount;
		ViewSection('page_start');
	}
	$.ajax({
		cache: false,data: {type: $type,product: $product,account: $account,amount: $amount},
		dataType: 'json',type: 'GET',timeout: 20000,url: 'api/console.php'
	})
	.done(function(data) {
		var consolelist = '';
		$.each(data, function(index, e) {
			if(index == 'price'){
			$(".console-total").html('EUR '+e);
			}else{
			consolelist += '<div style="clear:both;"><div style="float:left;">'+e.amount+' x '+e.console_product+'</div><div style="display:inline-block;float:right;margin-right:10px;">EUR '+e.price+'</div></div>';
			}
		})
		$(".console-list").html(consolelist);
		GetLogscreen();
	});
	
}
	
function abort($type = ''){
	if($type == 'empty'){
		ConsoleAction('empty');
	}
	ViewSection('page_start');
	$(function(){
			$('#input').val('');
	});
	$(function(){
			$('#input_deposit').val('');
	});
	GitPush();
}
	
</script>	
			
			
	


	

    </body>
</html>
				
