<?php
	
	session_start();

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "abcd";

	$conn = mysqli_connect($servername,$username,$password,$dbname);

	if($conn){
		$firstName = mysqli_real_escape_string($conn,$_POST['firstname']);
		$lastName = mysqli_real_escape_string($conn,$_POST['lastname']);
		$email = mysqli_real_escape_string($conn,$_POST['email']);
		$uname = mysqli_real_escape_string($conn,$_POST['username']);
		$telephone = mysqli_real_escape_string($conn,$_POST['telephone']);
		$address = mysqli_real_escape_string($conn,$_POST['address_1']);
		$city = mysqli_real_escape_string($conn,$_POST['city']);
		$postcode = mysqli_real_escape_string($conn,$_POST['postcode']);
		$country = mysqli_real_escape_string($conn,$_POST['country_id']);
		$state = mysqli_real_escape_string($conn,$_POST['zone_id']);
		$pass1 = mysqli_real_escape_string($conn,$_POST['password']);
		$pass2 = mysqli_real_escape_string($conn,$_POST['confirm']);

		$sql = "INSERT INTO reg(firstName, lastName, email, username, telephone, address, city, postcode, country, state, password) VALUES('$firstName' , '$lastName' , '$email', '$uname', '$telephone', '$address', '$city', '$postcode', '$country', '$state', '$pass2')";
		if(mysqli_query($conn,$sql)){
			header("location: http://localhost/phpmyadmin/sql.php?server=1&db=abcd&table=reg&pos=0");
		}else{
			echo "error2";
		}
	}else{
		echo "Connection failed";
	}
?>