<?php
$con=mysqli_connect("localhost","root","","test");
$result = mysqli_query($con,"SELECT * FROM gst_details");
?>
<html>
<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
	<script type="text/javascript" src="gst_form.js"></script>
	<script src="header.html"></script>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/> <script src="jquery.js"></script> 
    <script> 
    $(function(){
      $("#includedContent").load("header.html"); 
    });
    </script> 
	<h1> </h1>
	<title>Displaying Details of customer</title>
	<style type="text/css">
		body {
			font-size: 15px;
			color: #343d44;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			margin: 0;
		}
		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}

		h3 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 10px;
		}

		table td {
			transition: all .5s;
		}
		
		
		.data-table {
			border-collapse: collapse;
			font-size: 10px;
			min-width: 400px;
		}

		.data-table th, 
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 10px;
		}
		.data-table caption {
			margin: 5px;
		}

		
		.data-table thead th {
			background-color: #508abb;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}

		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: right;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}

		
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: right;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
	</style>
</head>
<body>
	<div class="container">
	<div id="includedContent"></div>
	<h3> GST Details Of the customer</h3>
		<h2>            </h2>
	<div class="table-responsive">
	<table class="data-table">
	
		<thead>
			<tr>
				<th>Customer Name </th>
				<th>GSTIN</th>
				<th>ARN</th>
				<th>Principal place of Business</th>
				<th>state Code</th>
				<th>Pan Number</th>
				<th>E-Mail </th>
				<th>Mobile Number</th>
				<th>ABank Account Number</th>
				<th>NAme of the bank</th>
				<th>IFS Code</th>
				<th>Type of registration</th>
				<th><button class="btn btn-primary">Edit</button></th>
				<th><button class="btn btn-danger">Delete</button></th>
			</tr>
		</thead>
		
		<?php
		
		while($row = mysqli_fetch_array($result))
		{
			echo "<tr>";
			echo "<td>" . $row['CN'] . "</td>";
			echo "<td>" . $row['GSTIN'] . "</td>";
			echo "<td>" . $row['ARN'] . "</td>";
			echo "<td>" . $row['PPOBWS'] . "</td>";
			echo "<td>" . $row['S_CODE'] . "</td>";
			echo "<td>" . $row['PAN'] . "</td>";
			echo "<td>" . $row['EMI'] . "</td>";
			echo "<td>" . $row['MN'] . "</td>";
			echo "<td>" . $row['BAN'] . "</td>";
			echo "<td>" . $row['NOTB'] . "</td>";
			echo "<td>" . $row['IFSC'] . "</td>";
			echo "<td>" . $row['TOR'] . "</td>";
			echo "</tr>";
		}
		echo "</table>";

		mysqli_close($con);?>

	</table>
	</div>
	</div>
	</div>
</body>
</html>
		
