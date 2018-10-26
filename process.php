 <?php
echo $_POST['CN'];

echo $_POST['GSTIN'];

echo $_POST['Principalplace'];

echo $_POST['Address'];

echo $_POST['PAN'];

echo $_POST['emailid'];

echo $_POST['Mobilenumber'];

echo $_POST['bankaccno'];

echo $_POST['addobank'];
 
echo $_POST['ifs'];
 
echo $_POST['type of registration'];
 
echo $_POST['desp'];
 
echo $_POST['hsn'];
 
echo $_POST['description1'];
 
echo $_POST['code'];

 ?>
 
 
 
 
 
 
 
 
 
 <?php include 'database.php';>

<?php

// create a variable
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$department=$_POST['department'];
$email=$_POST['email'];

//Execute the query

mysqli_query($connect"INSERT INTO employees1(first_name,last_name,department,email)
				VALUES('$first_name','$last_name','$department','$email')");