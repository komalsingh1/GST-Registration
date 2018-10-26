<?php include ('dbconnect.php');
$username=$_POST['email'];
$password = $_POST['passw'];
$qry="select * from gst_details where EMI='".$username."' and passw='".$password."'";
$res =$mysqli->query($qry) or die (mysqli_error($mysqli));
if (($res->fetch_assoc())!=NULL){
	header("Location: gst_form.html");
}
else{
	echo "invalid credentials.";
}
?>

