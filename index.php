<?php
session_start();
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UFT-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>

    <form action="login.php" method="POST">
    
    <input type="text" name="uid" placeholder="Username"><br>
    <input type="password" name="pwd" placeholder="Password"><br>
    <button type="submit">Login</button>
    
    
    </form>
    
    <?php
    if (isset($_SESSION['id'])){
        echo $_SESSION['id'];
    }  
   
    ?>
    
  <br><br><br>
    
<form action="signup.php" method="POST">
    <input type="text" name="first" placeholder="Firstname"><br>
    <input type="text" name="last" placeholder="Lastname"><br>
    <input type="text" name="uid" placeholder="Username"><br>
    <input type="password" name="pwd" placeholder="Password"><br>
    <button type="submit">Sign Up</button>
    
    </form>
    <br><br><br>
    
    <form action="logout.php">
    <button>Log Out</button>
    
    </form>
</body>

</html>
