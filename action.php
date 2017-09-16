<?php
include "inc/account.html";
$mysqli = new mysqli("localhost", "root", "root","hospital");


if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} 

	$name=$_POST['name'];
	$add=$_POST['address'];
	$mobile=$_POST['mobile'];
	$dept=$_POST['dept'];
	$appoint=$_POST['adate'];
	$time=$_POST['time'];
	$gender=$_POST['gen'];
	$email=$_POST['e-mail'];


$query=mysqli_query($mysqli,"INSERT INTO patient  VALUES ('{$name}', '{$add}', '{$mobile}', '{$dept}', '{$appoint}','{$time}','{$gender}','{$email}')");

if ($query) {
	
	echo "<br>Sucessful Booking of Appointment";
	
$query="Select name,dept,apt_date,time from patient where mobile='{$mobile}'";

$result=mysqli_query($mysqli,$query);

echo"<table>
<tr>
<th>Patient Name</th>
<th>Department</th>
<th>Appointment Date</th>
<th>Appointment Time</th>

</tr>";
while($row=mysqli_fetch_row($result)){
echo "<tr>
<td>$row[0]</td>
<td>$row[1]</td>
<td>$row[2]</td>
<td>$row[3]</td>
</tr>";
}
echo"</table>";


}
else {
	echo "<br>Your Registery already exists or Appointment can not be booked";
}
?>
