<?php include 'server.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <style>
        body{
            margin: 0%;
            padding: 0%;
            background-image: url(IMG.jpg);
            display:flex;
            align-items: center;
            justify-content: center;
        }
        .Container{
            display:block;
            width:auto;
            margin: auto;
            padding:10px;
            background-color:turquoise;
            justify-content: center;
            align-items: center;
            height:40vh;
            border-radius :5px;
    

        }
        .form-group,input{
            margin bottom:20px;
            padding:10px;
            border-radius: 5px;
            width:90%;
            display: block;
           
        .label{
            font-family: sans-serif;
            padding: 5px;
            padding bottom: 20px;
        }
        }
        .form-group{
            background-color:burlywood;
            padding: 10px;
            width: 30%;
            margin bottom:10px;

        }
        .btn{
            
            padding: 5px;

        }


    </style>

    <link rel="stylesheet" href="registration.php">
</head>
<body>
    <form action="login.php" method="POST">
       
        <div class="Container">
         <h1>INVIGILATORS</h1>
        <h2>login here!</h2>
        <div class="form-group>
        <label for= "username"> UserName</label>
        <input type="text" name="name" id="username" >
    </div>
        <div class="form-group>
        <label for="password">Password<a href="registration.php"> ForgotPassword<a></label>
        <input type="Password"name="name" id="Password">
        <button type="submit" class="btn" value="login">login</button>
        <p>I am not a member<a href="registration.php">Click to Signup</a></p>
    </div>
    </div>
    </form>
    
</body>
</html>
