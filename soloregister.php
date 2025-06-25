<?php
session_start();

include "Includes/functions.inc.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="includes/soloregister.inc.php" method = "POST">
    <p class="form-label">Name</p>
    <input type="text" placeholder="sample" name='name'>
    <p class="form-label">IC</p>
    <input type="text" placeholder="0123456789123" name='ic'>
    <p class="form-label">Email</p>
    <input type="text" placeholder="example@gmail.com" name='email'>
    <p class="form-label">ContactNumber</p>
    <input type="text" placeholder="01234567891" name='phone'>
    <button type='submit' name="registration">Register</button>
</form>
</body>
</html>