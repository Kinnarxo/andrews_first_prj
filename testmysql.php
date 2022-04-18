<?php

$servername = "localhost";
$database = "register-bd";
$username = "root";
$password = "";

$mysql = new mysqli($servername, $username, $password, $database);
$age = 15;
$result = $mysql->query("SELECT * FROM test WHERE age > $age; ");


while ($row = $result->fetch_assoc()) {
	echo $row['id'], $row['name'], $row['age'], '<br>';
}
?>