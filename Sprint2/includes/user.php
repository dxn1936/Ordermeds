<?php

/**
 * user class for account creation ,login,verfication puropse
 */
class User
{
	private $con;
	function __construct()
	{
		include_once("../db/db.php");
		$db=new Database();
		$this->con = $db->connect();
		if($this->con)
		{
			echo "connected";
		}
		
		}

	
	}
$user = new User();
//echo $user->UserAccount("Rashmi","rrshmi@gmail.com","123","Admin");
//echo $user->Login("rrshmi@gmail.com","123");
//echo $_SESSION["username"];
?>
