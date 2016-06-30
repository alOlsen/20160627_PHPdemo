<?php
class MyObject{
	//Declare my variables
	private $conn;
	public $data;
	private $db;
	private $dbName 	= 'olsen_demo';
	private $username 	= 'root';
	private $password	= '';
	private $host 		= 'localhost';

	public function __construct(){
		
		$this->db = new mysqli( $this->host, $this->username, $this->password, $this->dbName );

		// Check connection
		if ($this->db->connect_error) {
	    	die("Connection failed: " . $this->db->connect_error);
		} 	
	}

	public function test(){
		echo "Hello World";
	}

	public function handleDemoData( $userInput ){
		$ins = "INSERT INTO demotable(userInput) VALUES('" .$userInput. "')";
		$this->db->query($ins);
		return true;
	}





	
}

?>