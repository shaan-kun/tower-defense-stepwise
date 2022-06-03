<?php

$dblocation = "localhost";
$dbname = "amelin";
$dbuser = "root";
$dbpasswd = "";

$mysqli = new mysqli("p:".$dblocation, $dbuser, $dbpasswd, $dbname);
$mysqli->set_charset("utf8");

?>