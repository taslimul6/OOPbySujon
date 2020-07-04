<?php
require('function.php');
session_start();
if (!usrlog()){
    header('location: index.php');

}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin panel</title>
</head>
<body>
 <h1>akn ami admin manus vab asa akta</h1>



 <a href="logout.php"> Ber hye jao</a>
    
</body>
</html>