<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
?> 
<?php
session_start();
include 'db.php';
$name= "";
$email= "";
$id=0;
$pass= "";
$comf= "";

if(isset($_POST['submit'] )){
    $name=$_POST['userName'];
    $email=$_POST['Email'];
    $pass=$_POST['Password'];
    $comf=$_POST['Comfirm Password'];
    mysqli_query($conn,"INSERT INTO employeee(userName, Email,Password,Comfirm Password) VALUES ('$name','$email','$pass','$comf')");
    $_SESSION['message']="$name Email saved";
    header('location:registration.php');
}     

if (isset($_POST['update'])) {
$id = $_POST['id'];
$name = $_POST['userName'];
$email = $_POST['Email'];
mysqli_query($conn, "UPDATE info SET name='$name', Email='$email'
WHERE id=$id");
$_SESSION['message'] = "$name Email updated!";
header('location:registration.php');


}




?>