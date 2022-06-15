<?php

include 'connect.php';

if (isset($_POST)) {
	$fullname=$_POST['fullname'];
	$email=$_POST['email'];
	$numberone=$_POST['numberone'];
	$numbertwo=$_POST['numbertwo'];
	$education=$_POST['education'];
	$address=$_POST['address'];
	$file=$_FILES['image'];
	
	//print_r($file);

	$filename=$file['name'];
	$filepath=$file['tmp_name'];
	$fileerror=$file['error'];

	if ($fileerror) {
		$destfile='uploadedimage/'.$filename;
		// echo "$destfile";
		move_uploaded_file(	$filepath, $destfile);

		$query=mysqli_query($con,"INSERT INTO `registrationdata`(`fullname`, `email`, `numberone`, `numbertwo`, `education`, `address`, `photo`) VALUES ('$fullname','$email','$numberone','$numbertwo','$education','$address','$destfile')");

		
		if ($query) {
			echo "inserted....";
		}else{
			echo "not inserted";
		}
	}

	
}
else{
	echo "no data have veen uploaded....";
}

?>