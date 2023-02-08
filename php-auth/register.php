<?php 
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- Форма авторизации -->
    <form action="vendor/signup.php" method="post" enctype="multipart/form-data">
        <label>ФИО</label>
        <input type="text" name="full_name" placeholder="Введите своё полное имя">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите свой логин">
        <label>Почта</label>
        <input type="email" name="email" placeholder="Введите адрес Вашей электронной почты">
        <label>Изображение профиля</label>
        <input type="file" name="avatar">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль"> 
        <label>Подтверждение пароля</label>
        <input type="password" name="password_confirm" placeholder="Подтвердите Ваш пароль"> 
        <button>Зарегистрироваться</button>
        <p>
            У Вас есть аккаунт? - <a href="/">авторизируйтесь</a>!
        </p>
        <?php 
            if(!empty($_SESSION['message'])) {
                $message = $_SESSION['message'];
                echo '<p class="msg">'. $_SESSION['message'] .'</p>';
            }
            unset($_SESSION['message']);
        ?>

    </form>