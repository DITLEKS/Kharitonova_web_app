<?php
$servername = "127.0.0.1";
$username = "user";
$password = "Test123";
$dbname = "new";

$link = mysqli_connect($servername, $username, $password);

if (!$link) {
    die("Ошибка подклюения: " . mysqli_connect_error());
}

$sql = "CREATE DATABASE IF NOT EXISTS $dbname";

if (!mysqli_query($link, $sql)) {
    echo "Не удалось создать БД";
}

mysqli_close($link);

$link = mysqli_connect($servername, $username, $password, $dbname);

$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    pass VARCHAR(50) NOT NULL
)";

if (!mysqli_query($link, $sql)) {
    echo "Не удалось создать таблицу Users";
}

mysqli_close($link);
?>