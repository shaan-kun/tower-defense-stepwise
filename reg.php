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
    <!--Форма Регистрации -->
    <form action="scripts/sign_up.php" method="post">
        <label>Логин</label>
        <input type="text" name = "login" placeholder ="Введите свой логин"> 
        <label>Пароль</label>
        <input type="password" name = "password" placeholder ="Введите свой пароль">
        <label>Подтверждение пароля</label>
        <input type="password" name = "password_confirm" placeholder ="Подтвердите пароль">
        <button>Войти</button>
        <p>
           Уже есть аккаунт? - <a href = 'index.php' > Войти </a>
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