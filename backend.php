<?php

//Database Connection
	$servername 	= "localhost";
	$username 		= "root";
	$password 		= "";
	$dbname 		= "olsen_demo";
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	} 

	$datasrc 	= $_POST['datasrc'];
	$userInput 	= $_POST['userInput'];

	echo "WHERE THE DATA COMES FROM: ";
	echo $datasrc;

	echo "<hr>";
	echo "ACTUAL DATA:";
	echo $userInput;

	switch( $datasrc ){
		case "demo":
			$ins = "INSERT INTO demotable(userInput) VALUES('" .$userInput. "')";
			break;
		case "register":
			//SQL
			break;

	}
	

	// echo $ins;

	$conn->query( $ins );

?>