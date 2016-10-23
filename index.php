<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" dir="ltr"> <!-- tst22 -->
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
							<h4 class="mb16 uppercase deposit-accountlist-title"></h4>
							<div class="deposit-accountlist">Loading..</div>
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
							<a class="btn btn-lg btn-filled" onClick="Reload()">reload</a>
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
	
/*	
// always keep the input form in focus (in case barcode scanners can be used)
function CronJob(){
	if (!$("#input").is(':focus')){
	document.getElementById("input").focus();
	}
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
});*/

	
function BarcodeToConsole() {
	$input = $('#input').val();
	$('#input').val('');
	$.ajax({
		cache: false,data: {type:'add-barcode',barcode: $input},
		dataType: 'json',type: 'GET',timeout: 20000,url: 'api/console.php'
	});
	ConsoleRead();
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
		dataType: 'json',type: 'GET',timeout: 20000,url: 'gitpull.php'
	});
}	
	
function Reload(){
	ViewSection('none');
	GitPull();
	setTimeout(function(){
    location.reload();
}, 7000);
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
}
	
function ViewSection($screen = 'page_start'){
	$("section").hide();
	$("."+$screen).show();
	if($screen == 'page_start'){
	GetProductList(undefined,undefined,'productlist','add');	
	GetAccountList(undefined,undefined,'accountlist','buy');
	ConsoleRead();
	}
	if($screen == 'page_deposit'){
  GetAccountList(undefined,undefined,'deposit-accountlist','deposit');
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
	
	
function ConsoleAction($type = '',$product = 0,$account = 0,$amount = 0){
	if($type == 'deposit'){
		deposit_amount = $('#input_deposit').val();
	  $('#input_deposit').val('');
		$amount = deposit_amount;
		ViewSection('page_start');
	}
	$.ajax({
		cache: false,data: {type: $type,product: $product,account: $account,amount: $amount,session:1},
		dataType: 'json',type: 'GET',timeout: 20000,url: 'api/console.php'
	})
  .fail(function () {
    ConsoleRead();
	})
	.done(function(data) {
		ConsoleRead();
		if($type == 'deposit' || $type == 'buy'){
		GitPush();
		}
	});
}


function GetProductList($page = 0,$quantity = 19,$div = "productlist",$action = "add") {
	$.ajax({
		cache: false,data: {page: $page,quantity: $quantity},
		dataType: 'json',type: 'GET',timeout: 20000,url: 'api/products.php'
	})
	.done(function(data) {
		var html = '';
		$.each(data, function(index, e) {
			if(index=='next'){
				page_next = e;
			}else if(index=='total'){
				page_total = e;
			}else{
				html += '<a class="btn btn-lg btn-filled';
				if(e.product_type==3){
				html += ' btn-green';
				}else if(e.product_type==2){ 
				html += ' btn-red';
				}
				if($action == "add"){
				html += '" onClick="ConsoleAction(\'add\','+e.product_id+')">'+e.product_name+'</a>';
				}
			}
		});
		html += '<a class="btn btn-lg btn-filled next-p btn-green" onClick="GetProductList('+page_next+','+$quantity+',\''+$div+'\',\''+$action+'\')">&#8658;</a>';
		$("."+$div).html(html);
	  $("."+$div+"-title").html("Products "+($page+1)+"/"+page_total);
	});
}

function GetAccountList($page = 0,$quantity = 14, $div = "accountlist",$action = 'buy') {
	$.ajax({
		cache: false,data: {page: $page,quantity: $quantity},dataType: 'json',type: 'GET',timeout: 20000,url: 'api/accounts.php'
	})
	.done(function(data) {
		var html = '';
		
		$.each(data, function(index, e) {
			if(index=='next'){
				page_next = e;
			}else if(index=='total'){
				page_total = e;
			}else{
				html += '<a class="btn btn-lg btn-filled btn-blue" onClick="ConsoleAction(\''+$action+'\',undefined,'+e.account_id+')">'+e.account_name+'</a>';
			}
		});
		
		html += '<a class="btn btn-lg btn-filled btn-blue" onClick="GetAccountList('+page_next+','+$quantity+',\''+$div+'\',\''+$action+'\')">&#8658;</a>';
		$("."+$div).html(html);
		$("."+$div+"-title").html("Accounts "+($page+1)+"/"+page_total);
	});
}
	
function ConsoleRead(){
	$.ajax({
		cache: false,data: {type: 'read',session:1},
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
	});
	$.ajax({
		cache: false,data: {amount: 7},
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

	
</script>	
			
			
	


	

    </body>
</html>
				
