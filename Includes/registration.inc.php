<?php

if (isset($_POST['registration'])) {
    //retrieve input
    $category = $_POST['category'];

    //import function and establish connection
    require_once "dbh.inc.php";
    require_once "functions.inc.php";

    if ($category == "solo"){
        header("location:../soloregister.php");
        exit();
    }
    else {
        header("location:../grpregister.php");
        exit();
    }
}
else {
    header("location: ../login.php");
    exit();
}