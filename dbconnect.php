<?php
	$mysqli=new mysqli('localhost','root','','test');
    if($mysqli->connect_errno)
		{
	echo "Error: Failed to make connection\n";
	echo "Errorno:".$mysqli->connect_errno."\n";
	echo "Error:".$mysqli->connect_error."\n";
	exit;
		}
?> 




<?php
 $mysqli=new mysqli('localhost','root','','test');
    if($mysqli->connect_errno)
	{
	echo "Error: Failed connect\n";
	echo "Errorno:".$mysqli->connect_errno."\n";
	echo "Error:".$mysqli->connect_error."\n";
	exit;
	}
	
?> 