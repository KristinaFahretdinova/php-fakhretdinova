<?
    $n = rand(10,1000);
    echo ("Число n = ". $n ."<br> Делители");
    for($i = 1; $i <= $n; $i++) {
        if ($n % $i == 0) {
            echo (', ' .$i);
        }
    }
?> 