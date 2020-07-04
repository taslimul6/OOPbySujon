<?php
    session_start();
    if(isset($_SESSION["name"])){
        header('location: admin.php');
    }


    define('USAR', 'ami');
    define('PASS', 'tmi');
    $usar= isset($_POST['username']) ? $_POST['username'] :null; 
    $pass= isset($_POST['password']) ? $_POST['password'] : null;

    if($usar==USAR && $pass==PASS){
        $_SESSION['name']="one";
        header('Location: admin.php');
    }




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login system development</title>
</head>
<body>
        <form action="" method="post">
            <input type="text" name="username" placeholder="user name">
            <input type="password" name="password" placeholder="password">
            <input type="submit" name="logme" value="logme">
        </form>




    
</body>
</html>