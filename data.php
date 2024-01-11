<?php 
$name = $_POST['name'];
$email = $_POST['email'];
$phon = $_POST['phon'];
$trav = $_POST['trav'];
$date = $_POST['date'];

$con = mysqli_connect('localhost', 'root', '', 'user');

$inser = "INSERT INTO `trav`(`name`, `email`, `phone`, `travel`, `date`) VALUES ('$name','$email','$phon','$trav','$date')";

mysqli_query($con , $inser);
?>