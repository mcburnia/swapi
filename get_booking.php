<?php

// require_once 'cloudinary.php';
require_once 'getindev.php';

// userspice44 user id
// $user->data()->id;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);
// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}

$sql = sprintf( "SELECT * FROM customer_booking_detail WHERE bookingid = %u", $_GET["bookingid"]);

$result = $conn->query($sql);

$outp = array();
if ($result->num_rows > 0) 
{
    // output data of each row
    $outp = $result->fetch_all(MYSQLI_ASSOC);
}
echo json_encode($outp);

$conn->close();
?>