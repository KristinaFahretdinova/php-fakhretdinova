<?php
if (isset($_POST["obr"])) {
if ($_POST["a"]==$_POST["h"]) { echo($_POST["a"]." - УГАДАЛИ!");
 } else {
 if ($_POST["a"]>$_POST["h"]) {
 echo($_POST["a"]." - МНОГО...");
 } else { echo($_POST["a"]." - МАЛО..."); }
 } }
?>