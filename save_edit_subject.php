<html>
<body>
<?php
require_once 'connect1.php';
$mysqli = new mysqli($host, $user, $password, $database);
if ($mysqli->connect_errno) {
    echo "Невозможно подключиться к серверу";
} // установление соединения с сервером


$id_subject = $_GET['id_subject'];
$name_subject = $_GET['name_subject'];
$fio_subject = $_GET['fio_subject'];

$zapros = "UPDATE subject SET name_subject='$name_subject', fio_subjject='$fio_subject' 
WHERE id_subject='$id_subject'";

$result = $mysqli->query($zapros);

if ($result) {
    echo 'Все сохранено. <a href="subject.php"> Вернуться к списку Предметов </a>';
} else {
    echo 'Ошибка сохранения. <a href="subject.php">Вернуться к списку Предметов</a> ';
}
?>
</body>
</html>