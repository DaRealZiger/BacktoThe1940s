<?php

if (isset($_POST['usersignup'])) {
    //retrieve input
    $username = $_POST['username'];
    $password = $_POST['password'];

    //import function and establish connection
    require_once "dbh.inc.php";
    require_once "functions.inc.php";


    //create and login user
    createUser($conn, $username, $password);
}
else {
    header("location: ../signup.php");
}