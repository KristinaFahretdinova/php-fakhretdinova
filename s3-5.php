<?php
$kl = 0;
if (isset($_POST["obr"])) { 
 if ($_POST["c"]=="da")  
  	$kl+=1;
 if ($_POST["i"]=="da")  
  	$kl+=1;
  if ($_POST["j"]=="da")  
  	$kl+=1;
 if ($_POST["m"]=="da")  
  	$kl+=1;
  if ($_POST["n"]=="da")  
  	$kl+=1;
 if ($_POST["s"]=="da")  
  	$kl+=1;	
   if ($_POST["a"]=="net")  
  	$kl+=1;
 if ($_POST["b"]=="net")  
  	$kl+=1;
  if ($_POST["d"]=="net")  
  	$kl+=1;
 if ($_POST["e"]=="net")  
  	$kl+=1;
  if ($_POST["f"]=="net")  
  	$kl+=1;
 if ($_POST["g"]=="net")  
  	$kl+=1;
   if ($_POST["h"]=="net")  
  	$kl+=1;
 if ($_POST["k"]=="net")  
  	$kl+=1;
  if ($_POST["l"]=="net")  
  	$kl+=1;
 if ($_POST["o"]=="net")  
  	$kl+=1;
  if ($_POST["p"]=="net")  
  	$kl+=1;
 if ($_POST["q"]=="net")  
  	$kl+=1;
  if ($_POST["r"]=="net")  
  	$kl+=1;
 if ($_POST["t"]=="net")  
  	$kl+=1;
  echo $_POST["z"].", ";		
  if ($kl>15)
  echo "у вас покладистый характер";
  if ($kl>=8 && $kl<=15)
  echo "вы не лишены недостатков, но с вами можно ладить";
  if ($kl<8)
  echo "вашим друзьям можно посочувствовать";
 }
?>  