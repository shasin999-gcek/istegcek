<?php 

    require 'core/bootstrap.php';

    if($_SERVER['REQUEST_METHOD'] == 'GET') {
        require 'views/login.view.php';
        exit();
    }
    else {
        extract($_POST);

        if(!isset($username) || !isset($password)) {
            $err_msg = "Username and password must be password";
            header("Location: /login.php?err_msg=$err_msg");
            exit();
        }

        if($auth->authenticate($username, $password)) {
            session_start();
            session_name('ISTEGCEK_SESSION');
            $_SESSION['username'] = $username;
            header('Location: /admin.php');
        } else {
            $err_msg = "Username or password is incorrect";
            header("Location: /login.php?err_msg=$err_msg");
            exit();
        }
    }
