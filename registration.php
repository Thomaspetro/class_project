 <?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
?> 
<?php  
  
  include('server.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRATION</title>
    <link rel="stylesheet"  href="style.css">
</head>
<body>
    
<?php if (isset($_SESSION['message'])): ?>
<div class="msg">
<?php
echo $_SESSION['message'];
unset($_SESSION['message']);
?>
</div>
<?php endif ?>

    
    <form action="db.php" method="POST">
       <div class="logo"></div>
        <div class="form-BOX"> 
          
       <h1>INVIGILATION FORM</h1>
            <h>Register now</h>
           <div class="BOX">
    
    
        <label for="userName">UserName</label>
    <input type="text" name= name id= userName required>
    </div>
    <div class="BOX">
        <label for="email">Email</label>
    <input type="text" name= name id= email required>
    </div>
    <div class="BOX">
        <label for="Password">Password</label>
    <input type="Password" name= name id= Password required>
    </div> 
    <div class="BOX">
        <label for=" ComfirmPassword"> Comfirm Password</label>
    <input type="Password" name= name id= ComfirmPassword required>
    <input class="btn" type="submit" name= "save"  value="Sign up">
    <p>Aleardy a user <a href="login.php"> login </a></p>
    </div>
 </div>
</div>
        
    </form>
    <?php $results = mysqli_query($conn, "INSERT INTO employeee(userName, Email,Password,Comfirm Password) VALUES ('$name','$email','$pass','$comf')");
    $_SESSION['message']="$name Email saved"; ?>


 </body>
</html>
