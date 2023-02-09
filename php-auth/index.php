<?php 
    session_start();
    
    if(!empty($_SESSION['user'])) {
        header('Location: profile.php');
    }
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
    <form action="vendor/signin.php" method="post">
        <label>Логин</label>
        <input type="text" name ="login" placeholder="Введите свой логин">
        <label>Пароль</label>
        <input type="password" name ="password" placeholder="Введите свой пароль"> 
        <button type="submit">Войти</button>
        <p>
            У Вас нет аккаунта? - <a href="register.php">зарегистрируйтесь</a>!
        </p>
        <?php 
            if(!empty($_SESSION['message'])) {
                $message = $_SESSION['message'];
                echo '<p class="msg">'. $_SESSION['message'] .'</p>';
            }
            unset($_SESSION['message']);
        ?>
    </form>

</body>
</html>