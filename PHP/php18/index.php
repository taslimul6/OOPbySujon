<?php
    session_start();
    require('function.php');
        
    if (usrlog()){
    header('location: admin.php');

}

    $usr= isset($_POST['username']) ? $_POST['username'] : null;
    $pass= isset($_POST['password']) ? $_POST['password'] : null;
    $keep= isset($_POST['keep']);
    define('USR', 'ami');
    define('PASS', 'ami');

    if($usr == USR && $pass == PASS){
        $_SESSION['caalo']= "hyse";
        setcookie("calu", $keep, time() + 20);
        header('location: admin.php');
    }
   








?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login System with cookies </title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="username" placeholder="user name"> <br>
        <input type="password" name="password" placeholder="password"> <br>
        <input type="checkbox" name="keep" id="keep"> 
        <label for="keep">Keep me login</label> <br>
        <input type="submit" name="submit" value="submit">
    
    
    </form>
    
</body>
</html>