<?php
    $m = random_int(3, 10);;
    $n = random_int(3, 10);;
    $p = array();

    function uslovie() {
        echo("9. Если в матрице P(m,n) есть отрицательные элементы, найти наибольший из них.");
    }

    function zapolnit() {
        global $m;
        global $n;
        global $p;

        $m = random_int(3, 10);
        $n = random_int (3, 10);

        $p = array_fill(0, $m, 0);
        for($i = 0; $i < $m; $i++) {
            $p[$i] = array_fill(0, $n, 0);
        }

        for($i = 0; $i < $m; $i++) {
            for($j = 0; $j < $n; $j++) {
                $p[$i][$j] = random_int(-50,50);
            }
        }
    }

    function action() {
        global $m;
        global $n;
        global $p;

        $max = -1000000;

        for($i = 0; $i < $m; $i++) {
            for($j = 0; $j < $n; $j++) {
                if ($p[$i][$j] < 0 && $p[$i][$j] > $max) $max = $p[$i][$j];
            }
        }

        return $max;
    }

    function print_massiv() {
        global $m;
        global $n;
        global $p;

        echo('<table border>');
        for($i = 0; $i < $m; $i++) {
            echo('<tr>');
            for($j = 0; $j < $n; $j++) {
                echo('<td>'. $p[$i][$j] .'</td>');
            }
            echo('</tr>');
        }
        echo('</table>');
    }
?>