<?php
$con=mysqli_connect("localhost","root","","test");
$result = mysqli_query($con,"SELECT * FROM gst_details");
echo "<table border='1'>
<tr>
<th>Customer Name</th>
<th>GSTIN</th>
<th>ARN</th>
<th>Principal Place Of Bussiness</th>
<th>State Code</th>
<th>PAN Number</th>
<th>E- Mail</th>
<th>Mobile Number</th>
<th>Bank Account Number</th>
<th>Name Of the Bank</th>
<th>IFS Code</th>
<th>Type of Registration</th>
</tr>";
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

mysqli_close($con);
?>