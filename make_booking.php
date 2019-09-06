<?php

require_once('getindev.php');

// preconditions
// TODO test incoming data for reasonable validity
//
function validateParam(){
	
	//$_POST["duration"] is in 1, 2, 3, 6 or 12
	//$_POST["distance"] is in 1500, 2000, 2500 or 3000
	//$_POST["allrisks"] is true or false
	//$_POST["drivername"] is string of upto 5 words containing only [a-z,A-Z,-']
	//$_POST["driversurname"] is string of upto 5 words containing only [a-z,A-Z,-']
	//$_POST["driveremail"] is string of upto 5 words containing only [a-z,A-Z,-'@.]
	//$_POST["startdate"] must be after today() plus one day
	//$_POST["delivery"] is true or false
	//$_POST["address1"] is string of upto 10 words containing only [a-z,A-Z,-',]
	//$_POST["address2"] is string of upto 10 words containing only [a-z,A-Z,-',]
	//$_POST["priceagreed"] is decimal between 1 and 20000
	//$_POST["userid"] is int(11)
	//$_POST["vehicleid"] is int(11)
}

$result = TRUE;

/* test data 
 * *****************************************************************
$_POST["duration"]		= 3;
$_POST["distance"]		= 1500;
$_POST["allrisks"]		= true;
$_POST["drivername"]		= "Andi";
$_POST["driversurname"]	= "McBurnie";
$_POST["driveremail"]	= "andi@mcburnie.com";
$_POST["startdate"]		= "2019-09-23 09:00:00";
$_POST["delivery"]		= true;
$_POST["address1"]		= "La Valee, Sourdeval, Manche, France";
$_POST["address2"]		= "50150";
$_POST["priceagreed"]	= 580.00;
$_POST["userid"]			= 11;
$_POST["vehicleid"]		= 2;
 * *****************************************************************
*/

    
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);
// Check connection
if ($conn->connect_error){
	die("Connection failed: " . $conn->connect_error);
}

// echo(var_dump($_POST));die();

// SQL INSERT a new booking record
$sql = sprintf("INSERT INTO `_swapi_booking`(
	`duration`, 
	`distance`, 
	`allrisks`, 
	`drivername`, 
	`driversurname`,
  	`driveremail`, 
	`startdate`, 
	`delivery`,
  	`address1`, `address2`, 
	`priceagreed`, 
	`userid`, 
	`vehicleid`) " .
	"VALUES (%u, %u, %u, '%s', '%s', '%s', '%s %s:00', %u, '%s', '%s', %d, %u, %u)",
	$_POST["duration"],
	$_POST["distance"],
	("true" === $_POST["allrisks"]) ? 1 : 0,
	$_POST["drivername"],
	$_POST["driversurname"],
	$_POST["driveremail"],
	$_POST["startdate"], // date('Y-m-d', strtotime($_POST['dateFrom']));
	$_POST["starttime"],
	("true" === $_POST["delivery"]) ? 1 : 0,
	$_POST["address1"],
	$_POST["address2"],
	$_POST["priceagreed"],
	2, //$_POST["userid"],
	11, //$_POST["vehicleid"]
	);
	
	// echo $sql;
	
	if ($conn->query($sql) === TRUE){
		header("Location:bookingconfirmation.php");
	}else{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
/**/	
	$conn->close();
        
?>