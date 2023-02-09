<?php 
    session_start();
    if(!$_SESSION['user'])
        header('Location: /');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Профиль</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<!-- профиль -->
    <form action="vendor/signin.php" method="post">
        <img src="<?= $_SESSION['user']['avatar'] ?>" width="100" alt="">
        <h2><?= $_SESSION['user']['full_name'] ?></h2>
        <a href="#"><?= $_SESSION['user']['email'] ?></a>

        <a href="vendor/logout.php">Выход</a>
    </form>

</body>
</html>