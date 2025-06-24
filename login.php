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
<form action="includes/login.inc.php" method ="POST">
    <p class="form-label">Username</p>
    <input type="text" name="username" placeholder="sample">
    <p class="form-label">Password</p>
    <input type="password" name="password"
    placeholder="password">
    <button type="submit" name="userlogin">Login</button>
</form>
</body>
</html>