<?php
$host = 'localhost';
$database = 'a0613232_students';
$user = 'root';
$password = '';
require_once 'connect.php'; // подключаем скрипт
// подключаемся к серверу
$link = mysqli_connect($host, $user, $password, $database)
or die("Ошибка " . mysqli_error($link));

// выполняем операции с базой данных
$query = "SELECT * FROM user";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
if ($result) {

}
// закрываем подключение
mysqli_close($link);
?>