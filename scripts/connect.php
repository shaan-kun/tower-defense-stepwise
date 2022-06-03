<?php

$dblocation = "localhost";
$dbname = "amelin";
$dbuser = "root";
$dbpasswd = "";

$connect = mysqli_connect('localhost', 'root', '', 'amelin');

    if (!$connect) {
        die('Error connect to DataBase');
    }

?>