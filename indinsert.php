<?php
$name = $_POST['name'];
$dob = $_POST['dob'];
$email = $_POST['email'];
$mob = $_POST['mob'];
$address = $_POST['address'];
$msg = $_POST['msg'];

if (!empty($name) || !empty($dob) || !empty($email) || !empty($mob) || !empty($address) || !empty($msg))
  {
    echo "Thank you. We have received your contact information and message. Our team will contact with you shortly."

    // Credentials for Data Base
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "Indore";

    //Connection With DataBase
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
  } else {
    echo "Please fill valid input."
  }
?>
