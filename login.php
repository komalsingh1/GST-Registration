<?php include ('dbconnect1.php');

$ven=$_POST['vendor'];
$psw = $_POST['psw'];
$query_login="INSERT INTO login_details (VC,PSW) VALUES ('".$ven."','".$psw."')";
$mysqli->query($query_login) or die(mysqli_error($mysqli));
echo "details saved successfully";
	?>