<?php

    session_start();
    require_once 'connect.php';

    $full_name = $_POST["full_name"];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $pass_confirm = $_POST['password_confirm'];

    if($pass === $pass_confirm){
        
    }else{
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: ../register.php');
    }
    

    