<!DOCTYPE html>
<html>
	<head></head>
	<title></title>
	<style>
	.donat-cover{
		margin-left:5%;
		margin-right: 5%;
	}
	.payment-card{
		margin-left:1%;
		margin-right: 1%;
		margin-top: 20%;
	}
	.payment-big{
		background-color:rgba(red, green, blue, 0.5);
		border:solid;
		border-color:red;
		box-shadow: 2px 2px 5px 10px white;
	}
	</style>
	<body>
	<?php
	require_once 'header.php';
	?>
	<div class="donatebig" >

	<div class="row" style="margin-top: 10%;height:50vh">
		<div class="col-4"></div>
		<div class="col-4 rounded text-center payment-big ">
		
	<?php
	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");

	// following files need to be included
	require_once("./lib/config_paytm.php");
	require_once("./lib/encdec_paytm.php");

	$paytmChecksum = "";
	$paramList = array();
	$isValidChecksum = "FALSE";

	$paramList = $_POST;
	$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

	//Verify all parameters received from Paytm pg to your application. Like MID received from paytm pg is same as your application�s MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to Paytm PG for initiating transaction etc.
	$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.


	if($isValidChecksum == "TRUE") {
		
		if ($_POST["STATUS"] == "TXN_SUCCESS") {
			echo "<br/><br/><br/><br/><br/>". "<h2>Donate Status is Success</h2>" . "<br/>"."<img src='http://www.clker.com/cliparts/w/y/G/f/C/W/circle-check-red.svg.hi.png' height='50px' width='50px'>";
			//Process your transaction here as success transaction.
			//Verify amount & order id received from Payment gateway with your application's order id and amount.
		}
		else {
			echo "<b>Transaction status is failure</b>" . "<br/>"."<img src='https://cdn.pixabay.com/photo/2013/07/12/12/44/cancel-146131_960_720.png' height='50px' width='50px'>";
		}
	}
	else {
		echo "<b>Checksum mismatched.</b>";
		//Process transaction as suspicious.
	}
	?>
	<br>
	<b><a href="index.php">Go To Home Page</a></b>   
	</div>
	<div class="col-4"></div>
	</div>
	</div>
	</body>
</html>