<?php

// creating error handler functions 
function emptyInputSignup($name, $email, $uid, $pwd, $pwdRepeat)
{
    $result = null;
    if (empty($name) || empty($email) || empty($uid) || empty($pwd) || empty($pwdRepeat)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidUid($uid)
{
    $result = null;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $uid)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidEmail($email)
{
    $result = null;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function pwdMatch($pwd, $pwdRepeat)
{
    $result = null;
    if ($pwd !== $pwdRepeat) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function uidExists($conn, $uid, $email)
{
    $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $uid, $email);
    mysqli_stmt_execute($stmt);

    $resultsData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultsData)) {
        return $row;
    } else {
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}


function createUser($conn, $name, $email, $uid, $pwd)
{
    $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $uid, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location: ../signup.php?error=none");
    exit();
}

function emptyInputLogin($uid, $pwd)
{
    $result = null;
    if (empty($uid) || empty($pwd)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function loginUser($conn, $uid, $pwd)
{
    $uidExists =  uidExists($conn, $uid, $uid);

    if ($uidExists === false) {
        header("Location: ../login.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $uidExists['usersPwd'];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if ($checkPwd == false) {
        header("Location: ../login.php?error=wronglogin");
        exit();
    } else if ($checkPwd == true) {
        session_start();
        $_SESSION['userid'] = $uidExists['usersId'];
        $_SESSION['useruid'] = $uidExists['usersUid'];
        header("Location: ../index.php");
        exit();
    }
}
