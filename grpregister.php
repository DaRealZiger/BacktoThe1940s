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
        <form action="includes/grpregister.inc.php" method = "POST">
            <p class="form-label">Team Name</p>
            <input type="text" placeholder="sample" name='teamName'>
            <p>Member 1</p>
            <p class="form-label">Name</p>
            <input type="text" placeholder="sample" name='name1'>
            <p class="form-label">IC</p>
            <input type="text" placeholder="0123456789123" name='ic1'>
            <p class="form-label">Email</p>
            <input type="text" placeholder="example@gmail.com" name='email1'>
            <p class="form-label">ContactNumber</p>
            <input type="text" placeholder="01234567891" name='phone1'>
            
            <p>Member 2</p>
            <p class="form-label">Name</p>
            <input type="text" placeholder="sample" name='name2'>
            <p class="form-label">IC</p>
            <input type="text" placeholder="0123456789123" name='ic2'>
            <p class="form-label">Email</p>
            <input type="text" placeholder="example@gmail.com" name='email2'>
            <p class="form-label">ContactNumber</p>
            <input type="text" placeholder="01234567891" name='phone2'>
            
            <p>Member 1</p>
            <p class="form-label">Name</p>
            <input type="text" placeholder="sample" name='name3'>
            <p class="form-label">IC</p>
            <input type="text" placeholder="0123456789123" name='ic3'>
            <p class="form-label">Email</p>
            <input type="text" placeholder="example@gmail.com" name='email3'>
            <p class="form-label">ContactNumber</p>
            <input type="text" placeholder="01234567891" name='phone3'>
            <button type='submit' name="registration">Register</button>
        </form>
    </body>
</html>