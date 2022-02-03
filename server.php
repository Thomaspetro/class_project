<?php
session_start();
include 'db.php';

// initialize variable
$name= "";
$email= "";
$id=0;
$pass= "";
$comf= "";
$update= false;
if(isset($_POST['save'] )){
    $name=$_POST['userName'];
    $email=$_POST['Email'];
    $pass=$_POST['Password'];
    $comf=$_POST['Comfirm Password'];
    mysqli_query($conn,"INSERT INTO employeee(userName, Email,Password,Comfirm Password) VALUES ('$name','$email','$pass','$comf')");
    $_SESSION['message']="$name Email saved";
    header('location:registration.html');
        
    
}
if(isset($_POST['update'])){
    $id=$_POST['id'];
    $name=$_POST['userName'];
    $email=$_POST['Email'];
    $pass=$_POST['Password'];
    $comf=$_POST['Comfirm Password'];

    mysqli_query($conn,"UPDATE employeee SET userName='$name', Email= '$email',Password='$pass',Comfirm Password=$comf' WHERE id=$id);
    $_SESSION['message']="$name Email update";
    header('location:registration.html');
        

}
if(isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $update = true;
    $record = mysqli_query($conn, "SELECT * FROM employeee WHERE id=$id");


    if (mysqli_num_rows($record) == 1 ) {
    $s_row = mysqli_fetch_array($record);
    $name = $s_row['name'];
    $address = $s_row['address'];
    
}
}
if (isset($_GET['del'])){
    $id = $_GET['del'];
    mysqli_query($conn "DELETE FROM employeee WHERE id=$id");

    $_SESSION['message'] = "Email deleted!";
    header('location: registration.html');
}
?>