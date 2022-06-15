<?php

include'connect.php';

if (isset($_POST['update'])) {
	
	$id=$_POST['id'];
	$name=$_POST['fullname'];
	$emailid=$_POST['email'];
	$password=$_POST['password'];
	$num_one=$_POST['numberone'];
	$num_two=$_POST['numbertwo'];
	$gender=$_POST['gender'];
	$education=$_POST['education'];
	$address=$_POST['address'];


	$query="UPDATE `registrationdata` SET `id`='$id',`fullname`='$name',`email`='$emailid',`emailpassword`='$password',`numberone`='$num_one',`numbertwo`='$num_two',`gender`='$gender',`education`='$education',`address`='$address' WHERE id=$id";

	$sql=mysqli_query($con,$query);

	if ($sql) {
		header('location:update.php');
	}
	else{
		echo "not data updated..";
	}
}

?>



<!doctype html>
<html>
<head>

	<title>successfully added your response...</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>



<div class="container text-center">
	
	<div class="card mb-6" style="max-width: 540px; margin-top: 10%;
	 margin-left: 27%;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTZCYOAocod3ky3gVHrFQiL8yvvH0NUiOxU5A&usqp=CAU" alt="image">
    </div>
    <div class="col-md-8 text-center">
      <div class="card-body">
        <h5 class="card-title"><?php echo "THANK YOU"; ?></h5>
        <h5 class="text-info"><?php echo "UPDATED SUCCESSFULL..."; ?></h5>
        <a href="registration.php" ><small class="text-muted text-primary"><?php echo "Go another response" ?>;</small></a>
      </div>
    </div>
  </div>
</div>

</div>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>