<?php
if (isset($_POST["count"])){
$sent = trim($_POST["sent"]);
$letter = trim($_POST["letter"]);
if (empty($letter) || empty($sent)){
echo "Заполните поля";
return;
}
$words = preg_split('/'." ".'/u', $sent);
$counter = 0;
for ($c = 0; $c < count($words); $c++){
if (stripos($words[$c], $letter) === 0){
$counter++; }}
echo "Слов на эту букву: $counter";
}
?>