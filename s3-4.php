 <?php
if (isset($_POST["obr"])) { 
 if (($_POST["a"]=="Кристина")||($_POST["a"]=="Жанна")||($_POST["a"]=="Степан")||($_POST["a"]=="Айдар")) { echo("Здравствуйте, " . $_POST["a"]); 
  } else { 
  	echo "Вы не зарегистрированный пользователь!";
    }
    }
?>  