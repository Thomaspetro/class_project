
<?php
session_start();
include 'db.php';


if(isset($_POST['save'] )){
    $name=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    mysqli_query($conn,"INSERT INTO employeee(username, email,password) VALUES ('$name','$email','$password')");
    $_SESSION['username']=$username;
    header('location:login.php');
}  ;   


if(isset($_POST['login'] )){
    $email=$_POST['email'];
    $password=$_POST['password'];

    // checkin

    // call user
    $user = mysqli_query($conn,"SELECT * FROM employeee WHERE email='$email' AND password='$password'");
    
    mysqli_query($conn,"INSERT INTO employeee(username, email,password) VALUES ('$name','$email','$password')");
    $_SESSION['username']=$username;
    header('location:index.php');
}  ;   




if (isset($_POST['update'])) {
$id = $_POST['id'];
$name = $_POST['userName'];
$email = $_POST['Email'];
mysqli_query($conn, "UPDATE info SET name='$name', Email='$email'
WHERE id=$id");
$_SESSION['message'] = "$name Email updated!";
header('location:login.php');


};




?>