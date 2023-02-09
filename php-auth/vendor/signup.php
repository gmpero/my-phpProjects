<?php

    session_start();
    require_once 'connect.php';

    $full_name = $_POST["full_name"];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $pass_confirm = $_POST['password_confirm'];

    if($pass === $pass_confirm){
        //$_FILES['avatar']['name'];
        $path = 'uploads/' . time() . $_FILES['avatar']['name'];

        if(!move_uploaded_file($_FILES['avatar']['tmp_name'], '../'.$path)){
            $_SESSION['message'] = 'Ошибка при загрузке картинки';
            header('Location: ../register.php');
        }

        $pass = md5($pass);

        mysqli_query($connect, "INSERT INTO `users` 
        (`id`, `full_name`, `login`, `email`, `password`, `avatar`) 
        VALUES (NULL, '$full_name', '$login', '$email', '$pass', '$path')");

        $_SESSION['message'] = 'Регистрация прошла успешно!';
        header('Location: ../index.php');

    }
    else{
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: ../register.php');
    }

    
    
     
   
    

    