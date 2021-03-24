<?php

// checks if the user got to the signup page from the submit btn
if (isset($_POST['submit'])) {

    // Grab data from the url 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];
    $pwdRepeat = $_POST['pwdRepeat'];


    require_once 'dbh.inc.php';
    require_once 'functions.inc.php'; //script that handles errors 

    // error handlers

    if (emptyInputSignup($name, $email, $uid, $pwd, $pwdRepeat) !== false) {
        header("location: ../signup.php?error=emptyinput");
        exit();
    }
    if (invalidUid($uid) !== false) {
        header("location: ../signup.php?error=invaliduid");
        exit();
    }
    if (invalidEmail($email) !== false) {
        header("location: ../signup.php?error=invalidemail");
        exit();
    }
    if (pwdMatch($pwd, $pwdRepeat) !== false) {
        header("location: ../signup.php?error=pwdmatcherror");
        exit();
    }
    if (uidExists($conn, $uid, $email) !== false) {
        header("location: ../signup.php?error=uidtaken");
        exit();
    }
    createUser($conn, $name, $email, $uid, $pwd);
} else {
    header("location: ../signup.php");
    exit();
}
