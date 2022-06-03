<?php

require("connect.php");

$result = array();


$foodResult = $mysqli->query("SELECT login, game_count, game_win, game_loss, score FROM user");

while ($food = $foodResult->fetch_array(MYSQLI_ASSOC)) {

	array_push($result, $food);

};

echo json_encode($result);

?>