<p> Фахретдинова Кристина ПИ-321 </p>
<?php
    $n = random_int(1, 5);;
    $a = array_fill(0, $n, 0);
    $b = array_fill(0, $n, 0);

    $ravni = true;

    for($i = 0; $i < $n; $i++) {
        $a[$i] = random_int(1, 5);
        $b[$i] = random_int(1, 5);
    }

    echo('A: ');
    print_r($a); 
    echo('<br>');
    echo('B: ');
    print_r($b);    
    echo('<br>');

    for($i = 0; $i < $n; $i++) {
        if ($a[$i] != $b[$i]) {
            $ravni = false;
            break;
        }
    }

    if ($ravni) echo('Да');
    else echo('Нет');
?>