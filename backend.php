<?php
	
	include_once("backendObject.php");

	$myObj = new MyObject();

	$myObj->test();

	$datasrc 	= $_POST['datasrc'];
	$userInput 	= $_POST['userInput'];

	echo "WHERE THE DATA COMES FROM: ";
	echo $datasrc;

	echo "<hr>";
	echo "ACTUAL DATA:";
	echo $userInput;

	switch( $datasrc ){
		case "demo":
			$objRes = $myObj->handleDemoData( $userInput );
			break;
		case "register":
			//SQL
			break;

	}
	
	echo $objRes;
	
	// echo $ins;



?>