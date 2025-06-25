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
<form action="includes/registration.inc.php" method = "POST">
    <p class="form-label">TeamName</p>
    <input type="text" placeholder="sample" name='TeamName'>
    <label for="category">Choose Category</label>
    <select id="category" name="category">
        <option value="solo">Solo</option>
        <option value="group">Group</option>
    </select>
    <br>
    <br>
    <h>Member 1</h>
    <p class="form-label">Name</p>
    <input type="text" placeholder="sample" name='name1'>
    <p class="form-label">IC</p>
    <input type="text" placeholder="0123456789123" name='ic1'>
    <p class="form-label">Email</p>
    <input type="text" placeholder="example@gmail.com" name='email1'>
    <p class="form-label">ContactNumber</p>
    <input type="text" placeholder="01234567891" name='phone1'>
    <br>
    <br>
    <h>Member 2</h>
    <p class="form-label">Name</p>
    <input type="text" placeholder="sample" name='name2'>
    <p class="form-label">IC</p>
    <input type="text" placeholder="0123456789123" name='ic2'>
    <p class="form-label">Email</p>
    <input type="text" placeholder="example@gmail.com" name='email2'>
    <p class="form-label">ContactNumber</p>
    <input type="text" placeholder="01234567891" name='phone2'>
    <br>
    <br>
    <h>Member 3</h>
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