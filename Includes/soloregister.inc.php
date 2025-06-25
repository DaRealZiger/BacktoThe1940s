<?php

if (isset($_POST['registration'])) {
    //retrieve input
    $name = $_POST['name'];
    $ic = $_POST['ic'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    //import function and establish connection
    require_once "dbh.inc.php";
    require_once "functions.inc.php";


    //create and login user
    soloRegister($conn, $name, $ic, $email, $phone);
}
else {
    header("location: ../registration.php");
}