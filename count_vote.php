<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "whanwhan";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "UPDATE `count_like` (`milkfactory`, `timber`, `atladkrabang`, `lamun`, `bancha`) 
VALUES (".$_POST["milkfactory"].", ".$_POST["timber"].", ".$_POST["atladkrabang"].", ".$_POST["lamun"].", ".$_POST["bancha"];
$result = $conn->query($sql);


$conn->close();

?>