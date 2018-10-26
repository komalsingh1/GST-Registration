<?php include ('dbconnect1.php');
$username=$_POST['CN'];
$GSTIN = $_POST['GSTIN'];
$arn =$_POST['ARN'];
$ppobws = $_POST['add'];
$statecode=$_POST['st_code'];
$ao = $_POST['add_add'];
$pan = $_POST['pan'];
$emi = $_POST['email_id'];
$mn = $_POST['mob'];
$BAN = $_POST['bank_acc'];
$notb =$_POST['add_bank'];
$ifsc = $_POST['ifsc'];
$tor=$_POST['tor'];
$query_gst="INSERT INTO gst_details ( CN, GSTIN,ARN,PPOBWS,S_CODE,AOAPOB,PAN,EMI,MN,BAN,NOTB,IFSC,TOR) VALUES ('".$username."','".$GSTIN."','".$arn."','".$ppobws."','".$statecode."','".$ao."','".$pan."','".$emi."','".$mn."','".$BAN."','".$notb."','".$ifsc."','".$tor."')";
$mysqli->query($query_gst) or die(mysqli_error($mysqli));
echo "details saved successfully";
	?>