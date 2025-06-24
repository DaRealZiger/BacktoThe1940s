<?php

//signup.inc.php
function createUser($conn, $username, $password){
    $sql = "INSERT INTO users (username, password) VALUES (?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtFailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, 'ss', $username, $password);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../login.php");
}

//login.inc.php
function loginUser($conn, $username, $password) {
    $uidExists = uidExists($conn, $username);

    if ($uidExists == false) {
        header("location: ../login.php?error=wrongLogin");
        exit();
    }

    $storedPassword = $uidExists['password'];
    $checkedPassword = ($password == $storedPassword);

    if ($checkedPassword == false) {
        header("location: ../login.php?error=wrongLogin");
        exit();
    } 
    else if ($checkedPassword == true) {
        session_start();

        $_SESSION["uid"] = $uidExists['id'];
        $_SESSION["username"] = $uidExists['username'];
    }
}

function uidExists($conn, $username) {
    $result;
    $sql = "
        SELECT * , 'users' 
        FROM users
        WHERE username = ?
    ";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=why");
        exit();
    }

    mysqli_stmt_bind_param($stmt, 's', $username);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } else {
        $result = false;
    }

    return $result;
    mysqli_stmt_close();
}