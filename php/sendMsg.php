<?php

include("connection.php");

$Fullname = $_POST["fullname"];
$EmailAddress = $_POST["emailaddress"];
$Phonenumber = $_POST["phonenumber"];
$Message = $_POST["message"];

$query = $mysqli->prepare("INSERT INTO messages(fullname, emailaddress, phonenumber, message) VALUE (?, ?, ?, ?)");
$query->bind_param("ssis", $Fullname, $EmailAddress, $PhoneNumber, $Message);
$query->execute();

$response = [];
$response["success"] = true;

echo json_encode($response);


?>