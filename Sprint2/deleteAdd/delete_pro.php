<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db1";

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

$sql1 = "select product_name from product where product_name='$product_name'";

$result = mysqli_query($conn,$sql1);
if(mysqli_num_rows($result) == 0){
	echo "<html><head>
				<script>
					alert('Product does not exist Enter new details');
					document.location = 'add_product.php';
				</script>
			</head></html>";
}

$sql = "DELETE FROM product WHERE product_name = '$product_name'";
if(mysqli_query($conn, $sql)){ 
    echo "<html><head>
				<script>
					alert('Item deleted from the menu');
					document.location = 'delete_product.php';
				</script>
			</head></html>";
}else{
		echo "<html><head>
				<script>
					alert('Delete operation failed');
					document.location = 'delete_product.php';
				</script>
			</head></html>";
}

?>