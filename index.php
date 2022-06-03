<?php

    session_start();

    if (isset($_SESSION['user'])) {
        header('Location: rating.php');
    }

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="css/reg.css">

</head>
<body>

<!--Форма авторизации -->
<form action="scripts/sign_in.php" method="post">
    <label>Логин</label>
    <input type="text" name="login" placeholder="Введите свой логин">
    <label>Пароль</label>
    <input type="password" name="password" placeholder="Введите свой пароль">
    <button> Войти</button>
    <p>
        <a href="reg.php">создать аккаунт</a>
    </p>
    <p>
        <a href=""> Забыли пароль? </a>
    </p>
    <?php
        if (isset($_SESSION['message'])) {
            echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
        }
        
        unset($_SESSION['message']);
    ?>
</form>



</body>
</html>