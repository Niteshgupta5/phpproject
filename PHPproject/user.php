<?php
session_start();
header('location:login.php');
$con = mysqli_connect('localhost','root');
if($con){
	echo "connection successfull";
}else{
	echo "connection failed";
}

mysqli_select_db($con,'phpproject');
$name = $_POST['username'];
$pass = $_POST['password'];
$emailid = $_POST['email'];
$dob = $_POST['dob'];

$q ="select * from  userdata where name ='$name' && password = '$pass'";
$result = mysqli_query($con, $q);
$num = mysqli_num_rows($result);
if($num == 1){
	echo "id is already exist";
}else{
	$qy = " insert into userdata(username , password , email , dob) values ('$name','$pass','$emailid','$dob')";
	mysqli_query($con, $qy);
}



?>
