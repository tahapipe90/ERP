<?php


$con = mysqli_connect("localhost","root","root","hospital");
if (!$con)
  {
  die('Could not connect: ' . mysqli_error());
  }
  session_start();

  $mobileno=$_POST['mobile'];
  $password=$_POST['pass'];

  
  //$cnf=mysqli_query($con,"select mobileno,password from registration where mobile='{$mobile}' and password='{$pass}'");
$cnf=mysqli_query($con,"select mobile,password from registration where `mobile` ='{$mobileno}' and `password` ='{$password}'");


  if($cnf)
  {
  			echo"loged in";
  			//redirect to the home page of user login
  			$_SESSION['mobile'] = $mobileno;
  			header("Location:patient.html"); 
  			header("Location: myaccount.php");
  			
  }
  else{
			echo "$mobileno   $password";
			echo 'not loged in';
  			//redirect to the loginpage of user login
  			//header("Location:index.html"); 	
        
  }
   
?>
