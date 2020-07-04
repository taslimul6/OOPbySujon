<?php
 $firstname= isset($_GET['firstname']) ? $_GET['firstname'] : null;
 $lastname= isset($_GET['lastname']) ? $_GET['lastname'] : null;
 $email= isset($_GET['email']) ? $_GET['email'] : null;
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>get project</title>
</head>
<body>

<form action="" method="GET">
    <input type="text"name="firstname" placeholder="firstname">
    <input type="text"name="lastname" placeholder="lastname">
    <input type="email"name="email" placeholder="email">
    <input type="submit"name="submit" value="submit">


</form>

First nname: <?php echo $firstname;?> <br>
last nname: <?php echo $lastname;?> <br>
Email: <?php echo $email;?> <br>
   
</body>
</html>