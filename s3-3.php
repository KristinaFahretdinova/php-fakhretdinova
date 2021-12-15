<?php

function is_prime ($n)
{
    for($x=2; $x <= sqrt($n); $x++) {
        if($n % $x == 0) {
            return false;
        }
    }
    return true;
}
switch ($_POST["z"]) {
 // смотрим, чему равна переменная $z
 case 1:
 // 1 четные делители
echo "Четные делители числа: ". $_POST["a"] . "<br/>";
for ($i=2; $i<=$_POST["a"]; $i=$i+2) {
if (($_POST["a"] % $i) == 0) echo $i."<br>";
}
 break;
 case 2:
 // 2 нечетные делители
echo "Нечетные делители числа: ". $_POST["a"] . "<br/>";
 for ($i=1;$i<=$_POST["a"];$i=$i+2) {
if (($_POST["a"] % $i) == 0) echo $i."<br>";
}
 break;
 case 3:
 // 3 простые делители
$n=$_POST["a"];
echo "Простые делители числа: ". $_POST["a"] . "<br/>";
for ($i=1;$i<=$_POST["a"];$i=$i+1) {
if (($_POST["a"] % $i) == 0) if (is_prime($i)) echo $i."<br>";
}
 break;
 case 4:
 // 4 составные делители
echo "Составные делители числа: ". $_POST["a"] . "<br/>";
for ($i=2;$i<=$_POST["a"];$i=$i+1) {
if (($_POST["a"] % $i) == 0) if (!is_prime($i)) echo $i."<br>";
}
 break;
 case 5:
 // 5 все делители
echo "Все делители числа: ". $_POST["a"] . "<br/>";
echo "Четные делители". "<br/>";
for ($i=2; $i<=$_POST["a"]; $i=$i+2) {
if (($_POST["a"] % $i) == 0) echo $i."<br>";
}
echo "Нечетные делители " . "<br/>";
 for ($i=1;$i<=$_POST["a"];$i=$i+2) {
if (($_POST["a"] % $i) == 0) echo $i."<br>";
}
echo "Простые делители" . "<br/>";
for ($i=1;$i<=$_POST["a"];$i=$i+1) {
if (($_POST["a"] % $i) == 0) if (is_prime($i)) echo $i."<br>";
}
echo "Составные делители" . "<br/>";
for ($i=2;$i<=$_POST["a"];$i=$i+1) {
if (($_POST["a"] % $i) == 0) if (!is_prime($i)) echo $i."<br>";
}
 break;
}
?>