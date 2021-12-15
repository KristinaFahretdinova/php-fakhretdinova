<?php
if (is_numeric($_POST["f"]) and is_numeric($_POST["n"])) {

    } else {
       echo "Введите числа";
       exit();
    }
switch ($_POST["z"]) {
 // смотрим, чему равна переменная $z
 case 1:
 // 1 — сложить
 $s1= $_POST["f"]+$_POST["n"];
 break;
 case 2:
 // 2 — вычесть
 $s1= $_POST["f"]-$_POST["n"];
 break;
 case 3:
 // 3 — умножить
 $s1= $_POST["f"]*$_POST["n"];
 break;
 case 4:
 // 3 — разделить
 $s1= $_POST["f"]/$_POST["n"];
 break;
}
 echo "Результат вычислений: ";
echo $s1;
?>
