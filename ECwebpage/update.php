<?php

include'connect.php';
$id=$_GET['id'];
$query="select * from registrationdata where id=$id";
$sql=mysqli_query($con,$query);
while ($row=mysqli_fetch_array($query)) {
	
	$id=$row['id'];
	$name=$row['fullname'];
	$email=$row['email'];
	$pass=$row['emailpassword'];
	$num_1=$row['numberone'];
	$num_2=$row['numbertwo'];
	$gen_der=$row['gender'];
	$education=$row['education'];
	$address=$row['address'];

?>

<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>Update-here your registration</title>
</head>
<body>

<!-- navbar  start-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand  text-info" id="top" href="#">JCP Technologies</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
      
        <li class="nav-item">
          <a class="nav-link active" href="contact.php" target="_blank">Contact Us</a>
        </li>
      </ul>
      <form class="d-flex">

        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="btn btn-outline-info" href="registration.php">Resistration</a>
        </li>
        <li class="nav-item">
         <a class="btn btn-outline-info" href="login.php" target="_blank">Login</a>
     </li>
      </ul>
        
      </form>
    </div>
  </div>
</nav>
   <!-- navbar end -->

<br><br>
<div class="container">
<nav id="automation-one" class=" navbar-light bg-light">
  <div class="text-center">
    <h1>
      Registration
    </h1>
  </div>
</nav>
</div>


<br><br><br>

<div class="col-lg-6 m-auto container">

<form method="POST" action="updatesubmit.php">
  <input type="hidden" id="id" name="id" value="<?php echo $id; ?>"><br>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Full Name</label>
  <input type="text" name="fullname" value="<?php echo $name; ?>" class="form-control" id="exampleFormControlInput1" placeholder="full name:">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" name="email" value="<?php echo $email; ?>" class="form-control" id="exampleFormControlInput1" placeholder="email:">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email Password</label>
  <input type="password" name="emailpassword" value="<?php echo $pass; ?>" class="form-control" id="exampleFormControlInput1" placeholder="password:">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Mobile Number</label>
  <input type="number" name="numberone" value="<?php echo $num_1; ?>" class="form-control" id="exampleFormControlInput1" placeholder="personal-number">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Parent Number</label>
  <input type="number" name="numbertwo" value="<?php echo $num_2; ?>" class="form-control" id="exampleFormControlInput1" placeholder="parent-number">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Gender</label>
  <input type="text" name="gender" value="<?php echo $gen_der; ?>" class="form-control" id="exampleFormControlInput1">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Educational Details</label>
  <textarea class="form-control" name="education" value="<?php echo $education; ?>" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Address</label>
  <textarea class="form-control" name="address" value="<?php echo $address; ?>" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
<button class="btn btn-dark text-light m-2" name="update" type="submit">Register</button>
<button class="btn btn-dark text-light m-2"  type="reset">Reset</button>
</form>

<?php

}

?>

</div>




 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>