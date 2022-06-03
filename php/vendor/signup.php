<?php

    session_start();
    require_once 'connect.php';

    $login = $_POST['login'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    if ($password === $password_confirm) {

       // $password = md5($password);


        mysqli_query($connect, "INSERT INTO `user` (user_id, login, password, reg_date, game_count, game_win, game_loss, score) VALUES (NULL,'$login','$password', '1970-01-01 00:00:00.000000', NULL, NULL, NULL, NULL)");
       // mysqli_query($connect, "INSERT INTO `users` (`id`, `login`, `password`) VALUES (NULL, '$login','$password')");
        $_SESSION['message'] = 'Регистрация прошла успешно!';
        header('Location: ../index.php');


    } else {
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: ../registr.php');
    }

?>
