<?php

require_once('getindev.php');
//require_once('fileupload.php');


//    $result = FALSE;
    $result = TRUE;

//    $uploadFile = new FileUpload("vphoto");
//
//    preconditions
//    if(1 == $uploadFile->is_image()){
//     if(1 == $uploadFile->is_duplicate()){
//         if(1 == $uploadFile->check_size(500000)){
//             $result = $uploadFile->upload();
//         }
//     }
//    }
    
    // actions
    if($result === TRUE)
    {
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname, $port);
        // Check connection
        if ($conn->connect_error)
        {
            die("Connection failed: " . $conn->connect_error);
        }
        
        if($_GET["vreference"] == "EDIT")
        {
            // SQL UPDATE existing record
            $sql = sprintf("UPDATE `_swapi_vehicle` " .
                "SET (".
                "`vehicleid` = %u, ".
                "`brand` = %s, ".
                "`model` = %s, ".
                "`description` = %s, ".
                "`category-type = %s`, ".
                "`fuel-type = %s`, ".
                "`engine-size = %s`, ".
                "`vin = %s`, ".
                "`plate-number` = %s, ".
                "`colour` = %s, ".
                "`extras-1` = %s, ".
                "`extras-2` = %s, ".
                "`extras-3` = %s, ".
                "`extras-4` = %s, ".
                "`address-1` = %s, ".
                "`address-2` = %s, ".
                "`dealer-id` = %s, ".
                "`reference` = %s)",
                $_GET["vbrand"],          // brand
                $_GET["vmodel"],          // model
                $_GET["vdescribe"],       // description
                $_GET["vcategory"],       // category-type
                $_GET["vfueltype"],       // fuel-type
                $_GET["venginesize"],     // engine-size
                $_GET["vvin"],            // vin
                $_GET["vplatenumber"],    // plate-number
                $_GET["vcolour"],         // colour
                $_GET["vextra1"],         // extras-1
                $_GET["vextra2"],         // extras-2
                $_GET["vextra3"],         // extras-3
                $_GET["vextra4"],         // extras-4
                $_GET["vaddress1"],       // address-1
                $_GET["vpostcode"],       // address-2
                $_GET["vdealerid"]);      // dealer-id
                
        } 
        else 
        {
            // SQL INSERT a new record
            $sql = sprintf("INSERT INTO `_swapi_vehicle`(`vehicleid`, `brand`, `model`, `description`, `category-type`, `fuel-type`, `engine-size`, `vin`, `plate-number`, `colour`, `extras-1`, `extras-2`, `extras-3`, `extras-4`, `address-1`, `address-2`, `dealer-id`, `reference`)" .
                "VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %u)",
                $_GET["vbrand"],          // brand
                $_GET["vmodel"],          // model
                $_GET["vdescribe"],       // description
                $_GET["vcategory"],       // category-type
                $_GET["vfueltype"],       // fuel-type
                $_GET["venginesize"],     // engine-size
                $_GET["vvin"],            // vin
                $_GET["vplatenumber"],    // plate-number
                $_GET["vcolour"],         // colour
                $_GET["vextra1"],         // extras-1
                $_GET["vextra2"],         // extras-2
                $_GET["vextra3"],         // extras-3
                $_GET["vextra4"],         // extras-4
                $_GET["vaddress1"],       // address-1
                $_GET["vpostcode"],       // address-2
                $_GET["vdealerid"]);      // dealer-id
        }
            
        //echo $sql;
        
        if ($conn->query($sql) === TRUE)
        {
            header("Location:dealer.php");
        }
        else
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        $conn->close();
    }
        
?>