<?php

    session_start();
    if(!isset($_SESSION["name"])){
        header('location: index.php');
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
</head>
<body>
<h1>welcome to admin panel</h1>

<a href="logout.php">Log me out</a>
    
</body>
</html>