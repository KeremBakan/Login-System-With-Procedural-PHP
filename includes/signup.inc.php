<?php

    if(isset($_POST["submit"])){

        $name = $_POST["name"];
        $username = $_POST["uid"];
        $email = $_POST["email"];
        $pwd = $_POST["pwd"];
        $pwdRepeat = $_POST["pwdRepeat"];

        require_once "dbh.inc.php";
        require_once "functions.inc.php";

        if(emptyInputSignup($name, $username, $email, $pwd, $pwdRepeat) !== false){
            header("location: ../signup.php?error=emptyinput");
            exit();
        }

        if(invalidUid($username) !== false){
            header("location: ../signup.php?error=invaliduid");
            exit();
        }

        if(invalidEmail($email) !== false){
            header("location: ../signup.php?error=invalidemail");
            exit();
        }

        if(pwdMatch($pwd, $pwdRepeat) !== false){
            header("location: ../signup.php?error=invalidpwd");
            exit();
        }

        if(uIdExists($conn, $username, $email) !== false){
            header("location: ../signup.php?error=existinguid");
            exit();
        }

        createUser($conn, $name, $username, $email, $pwd, $pwdRepeat);

    } else{
        header("location: ../signup.php");
        exit(); 
    }