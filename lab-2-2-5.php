<p> Фахретдинова Кристина ПИ-321 </p>
<?php
    function f($u, $t) {
        if ($u > 0 &&  $t > 0) {
            return $u * $u + $t;
        } else if ($u <= 0 && $t <= 0) {
            return $u + ($t*$t) / 3;
        } else if ($u > 0 && $t <= 0) {
            return 2 * $u + $t;
        } else if ($u <= 0 && $t > 0) {
            return $u * $u - $t;
        }
    }

    $a = random_int(-5000, 5000);
    $b = random_int(-5000, 5000);
    $z = f($a, $b - 1) + f(($a * $a) / 3, $b * $b * $b) - f(($a - 1)/$b, $b * $a - 4);

    echo('a: ' . $a . '<br>');
    echo('b: ' . $b . '<br>');
    echo('z: ' . $z . '<br>');
    
?>
