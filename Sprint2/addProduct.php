<?php 

session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "abcd";

if($conn = mysqli_connect($servername,$username,$password,$dbname)){
	echo "\nConnected\n";
	$productName = mysqli_real_escape_string($conn,"Dettol Antiseptic");
	$mrp = mysqli_real_escape_string($conn,"150.65");
	$bestPrice = mysqli_real_escape_string($conn,"120.23");
	$save = mysqli_real_escape_string($conn,($mrp - $bestPrice));
	$available = mysqli_real_escape_string($conn,"1");

	echo $productName;

	$sql = "INSERT INTO product(name,mrp,bestRate,saving,available) VALUES('$productName','$mrp','$bestPrice','$save','$available')";
	if(mysqli_query($conn,$sql)){
		header('location: http://localhost/phpmyadmin/sql.php?server=1&db=abcd&table=product&pos=0');
	}else{
		echo "\ncould not add product";
	}
}else{
	echo "connectionError";
}

 ?>