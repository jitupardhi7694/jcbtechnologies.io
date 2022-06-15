<?php

include'connect.php';

$id=$_GET['id'];

$query="DELETE FROM `registrationdata` WHERE id=$id";

$q=mysqli_query($con,$query);
header('location:registrationtable.php');

?>