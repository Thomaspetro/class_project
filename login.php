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
            background-color:white;
            display:flex;
            align-items: center;
            justify-content: center;
        }
        .BOX{
            width: 20%;
            margin: auto;
            padding: 10px;
            background-color: turquoise;
            display: flex;
            justify-content: center;
            align-items: center;
            height:10vh;
    

        }
        .BOX,input{
            font-family: sans-serif;
            display: block;
            font-size: 15;
        }
        .BOX,label{
            width: 100%;
            border-radius: 5px;
            padding: 5px;

        }
        #button{
            background-color:burlywood;
            padding: 5px;
            width: 30%;

        }


    </style>

    <link rel="stylesheet" href="registration.php">
</head>
<body>
    <form action="login.php" method="POST">
        <h1>login</h1>
        <div class="BOX">
            <label for="userName">UserName</label>
        <input type="text" name= name id= userName required></div>
        
        </div>
        
        <div class="BOX">
            <label for="Password">Password</label>
        <input type="Password" name= name id= Password required></div>
        
        </div>
        
        <input type="submit" value="login" id="button">
        <p>I'm not a user <a href="registration.php"> Click to Signup</a></p>

    </form>
    
</body>
</html>
