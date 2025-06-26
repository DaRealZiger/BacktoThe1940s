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
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

        <title>Registration</title>
    </head>
    <body>
        <?php include "includes/header.inc.php"?>

        <form action="includes/registration.inc.php" method = "POST">
            <label for="category">Choose Category</label>
            <select id="category" name="category">
                <option value="solo" name=solo>Solo</option>
                <option value="group" name=group>Group</option>
            </select>
    
            
            <button type='submit' name="registration">Register</button>
        </form>
    </body>
</html>