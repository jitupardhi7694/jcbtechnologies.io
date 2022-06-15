<?php 

include'connect.php';

if (isset($_POST['submit'])) {
	
	$fullname = $_POST['fullname'];
	$email = $_POST['email'];
	$education = $_POST['education'];
	$address = $_POST['address'];


	$sql="INSERT INTO `contactdata`(`fullname`, `email`, `education`, `address`) VALUES ('$fullname','$email','$education','$address')";

	$query = mysqli_query($con,$sql);


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
      <img src="https://thumbs.dreamstime.com/b/successfully-completed-vector-seal-isolated-white-background-168286016.jpg" class="img-fluid rounded-start" alt="image">
    </div>
    <div class="col-md-8 text-center">
      <div class="card-body">
        <h5 class="card-title"><?php echo "THANK YOU"; ?></h5>
        <h5 class="text-info"><?php echo "SUCCESSFULLY ADDED YOUR RESPONSE....."; ?></h5>
        <a href="contact.php" target="_blank"><small class="text-muted text-primary"><?php echo "plese fill another response" ?>;</small></a>
      </div>
    </div>
  </div>
</div>

</div>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>