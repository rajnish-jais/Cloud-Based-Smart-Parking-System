<?php
$servername = "localhost";
$username = "ghakas1_parking";
$password = "project";
$dbname = "ghakas1_parking";

$token="hi how are";
//$token=$_POST['Token'];
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query="Insert into fcm(Token) values ('$token') on DUPLICATE KEY UPDATE Token='$token';";
$conn->query($query);
$conn->close();

?>