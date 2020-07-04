<?php
 $firstname= isset($_POST['firstname']) ? $_POST['firstname'] : null;
 $lastname= isset($_POST['lastname']) ? $_POST['lastname'] : null;
 $email= isset($_POST['email']) ? $_POST['email'] : null;
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>get project</title>
</head>
<body>

<form action="" method="POST">
    <input type="text"name="firstname" placeholder="firstname">
    <input type="text"name="lastname" placeholder="lastname">
    <input type="email"name="email" placeholder="email">
    <input type="submit"name="submit" value="submit">


</form>

<?php
if(isset($_POST['submit'])){
    $rst= "<br> form is validated <br>";
}
else {
    null;
}

?>

<?php
if(isset($rst)){
    echo $rst;
}

?>

First nname: <?php echo $firstname;?> <br>
last nname: <?php echo $lastname;?> <br>
Email: <?php echo $email;?> <br>
   
</body>
</html>