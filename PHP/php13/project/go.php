<?php

$firstname= isset($_GET['firstname']) ? $_GET['firstname'] : "shounik";
$lastname= isset($_GET['lastname']) ? $_GET['lastname'] : "hasan";
$email= isset($_GET['email']) ? $_GET['email'] : "hasan@smk.com";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gone</title>
</head>
<body>
First nname: <?php echo $firstname;?> <br>
last nname: <?php echo $lastname;?> <br>
Email: <?php echo $email;?> <br>

    
</body>
</html>