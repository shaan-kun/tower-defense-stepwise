<?php

$dblocation = "localhost";
$dbname = "Users";
$dbuser = "root";
$dbpasswd = "";

$mysqli = new mysqli("p:".$dblocation, $dbuser, $dbpasswd, $dbname);
$mysqli->set_charset("utf8");

?>