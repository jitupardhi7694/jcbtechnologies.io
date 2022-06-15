<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>Registration-Data</title>
</head>
<body>
    <div class="container md-4 my-4">
    	<div class="bg-dark text-white">
    	<h3 class="text-center">RESISTERED EMPLOYEE DATABASE</h3>
    	</div>
    </div>

    <div class="container">
    	<table class="table table-striped table-hover table-bordered">
    		<tr class="bg-info text-white text-center">
    			<th>Sr.No</th>
    			<th>FULL NAME</th>
    			<th>EMAIL ID</th>
                <th>Password</th>
    			<th>MOBILE NO</th>
    			<th>PARENT NO</th>
    			<th>GENDER</th>
    			<th>EDUCATION</th>
    			<th>ADDRESS</th>
    			<th>ACTION</th>
    		</tr>


<?php
	
	include'connect.php';

	$query="select * from registrationdata";

	$mysql=mysqli_query($con,$query);


	while ($req=mysqli_fetch_array($mysql)) {

    

?>
	<tr class="text-center table-bordered">
		  <td class="table-dark bg-dark"><?php  echo $req['id']; ?></td>
		  <td class="table-dark bg-dark"><?php  echo $req['fullname']; ?></td>
		  <td class="table-dark bg-dark"><?php  echo $req['email']; ?></td>
          <td class="table-dark bg-dark"><?php echo $req['emailpassword'];?></td>
		  <td class="table-dark bg-dark"><?php  echo $req['numberone']; ?></td>
		  <td class="table-dark bg-dark"><?php  echo $req['numbertwo']; ?></td>
		  <td class="table-dark bg-dark"><?php  echo $req['gender']; ?></td>
		  <td class="table-dark bg-dark"><?php  echo $req['education'];?></td>
		  <td class="table-dark bg-dark"><?php  echo $req['address']; ?></td>
		  <td class="table-dark bg-dark"><button class="btn-danger btn"><a href="registerdelete.php?id=<?php echo $req['id'];?>"class="text-white">Remove</a></button><button class="btn-primary btn"><a href="update.php?id=<?php echo $req['id'];?>"class="text-dark">Update</a></button>
	</tr>

	<?php
}
	?>
    	</table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>