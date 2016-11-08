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
$sql = "INSERT INTO `lamun` (`name`, `comment`, `datetime`) VALUES ('".$_POST["name"]."', '".$_POST["comment"]."', NOW())";
$result = $conn->query($sql);


$conn->close();

?>

ความคิดเห็นของคุณได้ถูกส่งแล้ว <a href="lamun.php">คลิกเพื่อกลับสู่หน้าก่อนหน้า</a>
