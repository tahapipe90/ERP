<?php
include "quotationlog.html";
$mysqli = new mysqli("localhost", "root", "root","vendor");


if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} 

	$company=$_POST['company'];
	$item=$_POST['item'];
	$quantity=$_POST['quantity'];
	$total=$_POST['total'];
	$discount=$_POST['discount'];
	$amount=$_POST['amount'];
echo "INSERT INTO qoutation (`company`, `items`, `quantity`, `total`, `discount`, `amount`) VALUES ('{$company}', '{$item}', '{$quantity}', '{$total}', '{$discount}','{$amount}')";
$query=mysqli_query($mysqli,"INSERT INTO qoutation (`company`, `items`, `quantity`, `total`, `discount`, `amount`) VALUES ('{$company}', '{$item}', '{$quantity}', '{$total}', '{$discount}','{$amount}')");
//var_dump($query);

if ($query) {
	
	echo "<br>Sucessful Booking of Qoutation";
	
	header("Location:quotationlog.php");
}
else {
	echo "Unable to commit";
	}
?>
