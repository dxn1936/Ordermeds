<?php
/**
 * 
 */
class Database 
{
	private $con;
	
	public function connect(){
		include_once("constant.php");
		$this->con = new Mysqli(HOST,USER,PASS,DB);
		if ($this->con) {
			echo "connected";
			return $this->con;
		}
		return "DATABASE_CONNECTION_FAIL";

	}
}

//$db = new Database();
//$db->connect();

?>