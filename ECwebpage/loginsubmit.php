<?php

include'connect.php';

if (isset($_POST['login'])) {
	$email=$_POST['email'];
	$password=$_POST['password'];

	$sql="select * from registrationdata where email=$email and pass=$password";

	$mysql=mysqli_query($con,$sql);

	if ($mysql=1) {
		
		header('location:registrationtable.php');
	}else{
		header('localhost:login.php');
	}
}

?>