<?php
include "register.html";
$mysqli = new mysqli("localhost", "root", "root","hospital");


if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} 
	
	$n=$_POST['name'];
	$e=$_POST['e-mail'];
	$m=$_POST['mobile'];
	$p=$_POST['pass'];
session_start();
$_SESSION["mobile"] = '$m';
$query=mysqli_query($mysqli,"INSERT INTO registration  VALUES ('{$n}','{$e}','{$m}','{$p}')" );

if ($query) {
	//echo "Register Successful";
	header("Location:login.html"); 	
}
else {
	echo "Something went wrong";
	}
?>
