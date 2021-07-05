<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "banking";
$tblcustumer = "custumer";
$tbltransact="transactb";
$tblcontact="contact";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>
<?php
}
?>
