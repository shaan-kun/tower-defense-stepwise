<?php

require("connect.php");

$result = array();


$foodResult = $mysqli->query("SELECT * FROM User");

while ($food = $foodResult->fetch_array(MYSQLI_ASSOC)) {

	array_push($result, $food);

};

echo json_encode($result);

?>
