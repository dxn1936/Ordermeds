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
		$address = mysqli_real_escape_string($conn,$_POST['address']);
		$pass1 = mysqli_real_escape_string($conn,$_POST['password']);
		$pass2 = mysqli_real_escape_string($conn,$_POST['confirm']);

		$sql1 = "select email,username,telephone from register";
		$result = mysqli_query($conn,$sql1);
		while($row = mysqli_fetch_array($result)){
			if($row['email']==$email && $row['username']==$uname && $row['telephone']==$telephone){
				header('location: RegFail.html');
				exit();
			}
			//echo "email: ".$row['email']." username: ".$row['username']." telephone: ".$row['telephone']. " ";
		}

		$sql = "INSERT INTO register(firstName, lastName, email, username, telephone, address, password) VALUES('$firstName' , '$lastName' , '$email', '$uname', '$telephone', '$address', '$pass2')";
		if(mysqli_query($conn,$sql)){
			header("location: login.php");
		}else{
			echo "failed";
		}
	}else{
		die("Connection failed: " . mysqli_connect_error());
	}
?>