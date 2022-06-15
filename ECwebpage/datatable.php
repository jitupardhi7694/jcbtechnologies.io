<!DOCTYPE html>
<html>
<head>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>contact-details-database..</title>
</head>
<body>

<!-- On tables -->
<div class="container">
	<div class="col-lg-12">
		<br><br>
		<h1 class="text-warning text-center">SERVE DATA ON CONTACT PAGE</h1>
		<br><br>
<table class="table-primary table-bordered text-center">
	<tr class="table-info">
		  <th class="table-light">SR.NO</th>
		  <th class="table-light">FULL NAME</th>
		  <th class="table-light">EMAIL ID</th>
		  <th class="table-light">EDUCATIONAL DETAILS</th>
		  <th class="table-light">ADDRESS</th>
		  <th class="table-light">ACTION</th>
	</tr>

<?php

	include'connect.php';

		$mysql="select * from contactdata";

		$sq=mysqli_query($con,$mysql);

	while($req=mysqli_fetch_array($sq)){
		
	

?>

<tr class="table-info text-center table-bordered-dark">
		  <td class="table-dark bg-dark"><?php  echo $req['id']; ?></td>
		  <td class="table-dark bg-dark"><?php  echo $req['fullname']; ?></td>
		  <td class="table-dark bg-dark"><?php  echo $req['email']; ?></td>
		  <td class="table-dark bg-dark"><?php  echo $req['education']; ?></td>
		  <td class="table-dark bg-dark"><?php  echo $req['address'];?></td>
		  <td class="table-dark bg-dark"><button class="btn-danger btn"><a href="deletedata.php?id=<?php echo $req['id'];?>"class="text-white">Delete</a></button>
	</tr>




<?php
}
?>
</table>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>