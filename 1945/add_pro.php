<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ordermeds";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysql_connect_error());
}
else{
	echo "connected";
}

$product_name = mysqli_real_escape_string($conn,$_POST['product_name']);
$price = mysqli_real_escape_string($conn,$_POST['price']);
$mfg_date = mysqli_real_escape_string($conn,$_POST['mfg_date']);
$exp_date = mysqli_real_escape_string($conn,$_POST['exp_date']);
$availability = mysqli_real_escape_string($conn,$_POST['availability']);

$query ="SELECT * from product WHERE product_name ='$product_name'";
$result = mysqli_query($conn,$query);
if(mysqli_num_rows($result) > 0){
	echo "<html><head>
				<script>
					alert('Product already exists Enter new details');
					document.location = 'add_product.php';
				</script>
			</head></html>";
}
else{
$sql = "INSERT INTO product(product_name,price,mfg_date,exp_date,availability) VALUES('$product_name','$price','$mfg_date','$exp_date',1)";
if(mysqli_query($conn, $sql)){ 
    echo "<html><head>
				<script>
					alert('Item added to the menu');
					document.location = 'add_product.php';
				</script>
			</head></html>";
	}else{
		echo "Ehhhhh!";
	}
}	

?>	