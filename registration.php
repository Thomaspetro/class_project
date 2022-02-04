 <?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
?> 
<?php include('server.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRATION</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Echo Messages -->
<?php if (isset($_SESSION['message'])): ?>
<div class="msg">
<?php
echo $_SESSION['message'];
unset($_SESSION['message']);
?>
</div>
<?php endif ?>
<!-- End Echo of Messages -->
    
    <form action="register.php" method="POST">
        <h1>INVIGILATION FORM</h1>
        <h2>Register now</h2>
        <div class="BOX">
            <label for="userName">UserName</label>
        <input type="text" name= name id= userName required></div>
        
        </div>
        <div class="BOX">
            <label for="email">Email</label>
        <input type="text" name= name id= email required></div>
        
        </div>
        <div class="BOX">
            <label for="Password">Password</label>
        <input type="Password" name= name id= Password required></div>
        
        </div>
        <div class="BOX">
            <label for=" ComfirmPassword"> Comfirm Password</label>
        <input type="Password" name= name id= ComfirmPassword required></div>
        
        </div>
        <input type="submit" name= "john"  value="Sign up">
        <p>Aleardy a user <a href="login.php"> login </a></p>

    </form>
    <?php $results = mysqli_query($conn, "SELECT * FROM employeee"); ?>


</body>
</html>
