<?php
session_start();

include "Includes/functions.inc.php"
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="styles/header.css">
        <link rel="stylesheet" href="styles/general.css">
        <link rel="stylesheet" href="styles/loginSignup.css">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

        <title>Login</title>
    </head>

    <body>
    <div class='overlay'>
        <?php include "includes/header.inc.php"?>
    
        <div class='content'>
            <div class='login-box'> 
                <form action="includes/login.inc.php" method ="POST">
                    <p class="form-label">Username</p>
                    <input type="text" name="username" placeholder="sample">
                    <p class="form-label">Password</p>
                    <input type="password" name="password"
                    placeholder="password">
                    <button type="submit" name="userlogin">Login</button>
                </form>
    
            </div>
        </div>

    </div>
    </body>
</html>