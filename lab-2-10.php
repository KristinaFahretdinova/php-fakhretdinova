<?
    echo ("<table border='1'>");
    for($i=0; $i < 10; $i++) {
        echo("<tr>");
        for($j=0; $j < 10; $j++) {
            if (($i*10+$j+1) % 2 == 0)
                echo ("<td style='color: red;'>". ($i*10+$j+1) ."</td>");
            else 
                echo ("<td>". ($i*10+$j+1) ."</td>");
        }
        echo("</tr>");
    }
    echo ("</table>");
?>  