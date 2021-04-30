<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "abcd";

if($conn = mysqli_connect($servername,$username,$password,$dbname)){
	echo "\nconnection successful";
}else{
	echo "failed";
}

$usrname = mysqli_real_escape_string($conn,$_POST['username']);
$pword = mysqli_real_escape_string($conn,$_POST['password']);

$sql = "select username, password from register";
$result = $conn->query($sql);

 while($row = $result->fetch_assoc()) {
    $uname = $row["username"];
    $pass = $row["password"];
    if($uname==$usrname && $pass==$pword){
    	header('location: dashboard.html');
	}else{
		echo "  ";
		echo "<html><head>
				<script>
					alert('Incorrect credentials');
					document.location = 'login.php';
				</script>
			</head></html>";
	}
}

?>