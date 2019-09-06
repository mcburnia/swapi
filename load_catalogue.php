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

$sql = sprintf("SELECT `vehicleid`, `brand`, `model`, `description`, `category-type` as `category`, `fuel-type` as `fuel`, `engine-size` as `cc`, `vin`, `plate-number` as `plate`, `colour`, `extra_1` as `ex1`, `extra_2` as `ex2`, `extra_3` as `ex3`, `extra_4` as `ex4`, `address-1` as `add1`, `address-2` as `add2`, `reference` FROM `_swapi_vehicle` WHERE `dealer-id` = %u", 11); //$_GET["dealer-id"]);

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