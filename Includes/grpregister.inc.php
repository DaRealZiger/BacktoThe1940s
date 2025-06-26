<?php

if (isset($_POST['registration'])) {
    //retrieve input
    $teamName = $_POST['teamName'];

    $name1 = $_POST['name1'];
    $ic1 = $_POST['ic1'];
    $email1 = $_POST['email1'];
    $phone1 = $_POST['phone1'];
 
    $name2 = $_POST['name2'];
    $ic2 = $_POST['ic2'];
    $email2 = $_POST['email2'];
    $phone2 = $_POST['phone2'];
 
    $name3 = $_POST['name3'];
    $ic3 = $_POST['ic3'];
    $email3 = $_POST['email3'];
    $phone3 = $_POST['phone3'];
    
    //import function and establish connection
    require_once "dbh.inc.php";
    require_once "functions.inc.php";


    //create and login user
    grpRegister($conn, $teamName, $name1, $ic1, $email1, $phone1, $name2, $ic2, $email2, $phone2, $name3, $ic3, $email3, $phone3);
}
else {
    header("location: ../registration.php");
}