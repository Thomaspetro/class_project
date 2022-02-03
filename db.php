<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$db = 'is383';
// Create Connection
$conn = mysqli_connect($servername,$username,$password,$db);
// Check connection
if(!$conn){
die("Connection failed ". mysqli_connect_error());
}
echo "connection successifull";
?>
