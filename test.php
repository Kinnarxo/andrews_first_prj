<?php

$servername = "localhost";
$database = "register-bd";
$username = "root";
$password = "";

$mysql = new mysqli($servername, $username, $password, $database);

$result = $mysql->query("SELECT * FROM test; ");



while ($row = $result->fetch_assoc()) {
	echo $row['id'], $row['name'], $row['age'], '<br>';
}
?>