<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet"
			href=
"https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
			integrity=
"sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I"
			crossorigin="anonymous" />
		<script src=
"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
				integrity=
"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
				crossorigin="anonymous"></script>
		<script src=
"https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
				integrity=
"sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
				crossorigin="anonymous"></script>
				<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
 
  <title>Basic Bank</title>

</head>
<body>
<div class="h">
<nav class="navbar navbar-expand-lg navbar-dark border-top border-bottom">
  <div class="container-fluid">
  <a class="navbar-brand" href="index.php"><img src="assets/img/logo2.png" height="50"></a>
  <a class="navbar-brand text-light" href="index.php"><b>Home</b><i class="material-icons align-middle">home</i></a>
</div>
</nav>
<div class="container">
	<div class="row">
		<div class="col-7">
		<img src="assets/img/car.png" class="img-fluid car" data-bs-toggle="tooltip" data-bs-html="true"  title="Going to Transaction">
		</div>
	<div class="col-5">
	<a href="customer.php">
	<img src="assets/img/bank4.png" class="img-fluid" style="margin-top:1%;float:left;height:60%;width:100%;" data-bs-toggle="tooltip" data-bs-html="true"  title="Transfer Money">
	</a>
	</div>
</div>
<div class="row" style="margin: top 0;">
	<div class="col-sm-4">
		<a href="customer.php">
			<div class="card cr">
				<img src="assets/img/custumer.png" height="100%" width="100%" data-bs-toggle="tooltip" data-bs-html="true"  title="View All Customers" >
			</div>	
		</a>
	</div>
	<div class="col-sm-4">
		<a href="transactionlist.php">
			<div class="card cr">
				<img src="assets/img/transaction.png" height="100%" width="100%" data-bs-toggle="tooltip" data-bs-html="true"  title="View Transfer Money List" >
			</div>
		</a>
	</div>
	<div class="col-sm-4">
		<a href="#indquersub">
			<div class="card cr">
				<img src="assets/img/call.png" height="100%" width="100%" data-bs-toggle="tooltip" data-bs-html="true" title="Easy Contact Us">
			</div>
		</a>
	</div>
</div>
</div>
<hr>
<div class="container border-primary border-4 border-top border-left border-right bg-white ">
<div class="row">
	<div class="col-5">
	<img src="assets/img/user1.png" height="100%" width="100%" style="margin:0%">
	</div>
	<div class="col-7 text-center ">
	<br><br>
	<h1 class=" text-primary">Our Services</h1>
	<p class="hln">"We give you the best facility. No matter how much you can transfer to anyone."</p>
	</div>
</div>
<div class="row ">
	<div class="col-7 text-center">
	<br><br>
	<h1 class=" text-primary ">If Any Query Then Ask</h1>
	<p class="hln">"If you ever have a problem with us, you can easily contact us."</p>
	</div>
	<div class="col-5">
	<img src="assets/img/rob2.jpg" height="100%" width="100%" style="margin:0%">
	</div>
</div>
<div class="row">
	<div class="col-5">
	<img src="assets/img/rob3.jpg" height="100%" width="100%" style="margin:0%">
	</div>
	<div class="col-7 text-center ">
	<br><br><br>
	<h1 class="text-primary ">Our Aim To Groth</h1>
	<p class="hln">"Our aim is to make everyone aware of ourselves and our high growth."</p>
	</div>
</div>
<section id="indquersub">
<?php
    if (isset($_POST['cotsubmit'])) {
		require_once ('include/cn.php');
		$cemail1 =  $_REQUEST['cemail'];
    	$cabout1 =  $_REQUEST['cabout'];
    	$cquery1 =  $_REQUEST['cquery'];
		$sql8 = "INSERT INTO $tblcontact (id, email, about, query) VALUES ('Null','$cemail1','$cabout1','$cquery1')";
              
        if ($conn->query($sql8) === true) {
			?>
			<script>alert('Your Query Sended Successfully');</script>
			<?php
        }
		else{
			echo "Error record: " . $conn->error;
		}
    }
	?>
<div class="container">
<div class="row">
	<div class="col-7 card">
	<br><br>
	<h1 class="text-center text-primary">CONTACT US</h1>
	<form class="form text-center" role="form" method="post">
		<input type="email" placeholder="Work Email" class="form-control" name="cemail"><br>
		<input type="text" placeholder="What's that about?" class="form-control" name="cabout"><br>
		<textarea placeholder="Go ahead, we're listening.." class="form-control" name="cquery"></textarea><br>
		<button type="submit" class="btn btu" name="cotsubmit">SUBMIT</button>
	</form>
	</div>
	<div class="col-5 card">
	<img src="assets\img\contactus.png" height="100%" width="100%" style="margin:0%">
	</div>
</div>
</div>
</section>
<div class="row ">
	<div class="col-5">
	<img src="assets/img/rob1.jpg" height="100%" width="100%" style="margin:0%">
	</div>
	<div class="col-7 text-center">
	<br><br><br>
	<h1 class=" text-primary">Today Store Then Save Future</h1>
	<p class="hln">"If you save today, the future will be saved."</p>
	</div>
</div>
</div>
<?php
require_once ('include/footer.php');
?>
<script>
	var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})
</script>
</body>
</html>