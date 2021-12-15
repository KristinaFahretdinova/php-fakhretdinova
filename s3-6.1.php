<?php
foreach ($_POST as $key => $string) {
}
if ((empty($_POST["a"])) or (empty($_POST["text"]))) {
          echo "Ошибка!Для вывода результата заполните все поля ";
		  echo ("<BR> <A href='s3-6.4.html'> Вернуться назад </A>");

    } else {
echo "<b>Текст, введённый изначально: </b>" . $_POST["text"] . "<BR>". "<BR>";
$text = str_replace($_POST["a"], '', $_POST["text"]);
echo "<b>Текст после удаления слова: </b>" . $text . "<BR>" . "<BR>";
echo "Символ '" . $_POST["a"] . "' был удален";
echo "<br>";
echo ("<BR> <A href='s3-6.4.html'> Вернуться назад </A>");
}

?>