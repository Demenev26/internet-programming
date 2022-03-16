<HTML>
<TITLE>  Деменев Константин ПИ-323</TITLE>
<BODY>
 <h1>Деменев Константин ПИ-323</h1><p>
9. Если в матрице P(m,n) есть отрицательные элементы, найти наибольший из них. <p>
<TABLE>
<?php
$min=-100;
$m = rand(9, 19);
$n = rand(9, 19); 
print_r("M=".$m. "  N=". $n. "<br>    ");
print_r("_   |");
for ($j = 1; $j <= $n; $j++) {
print_r("[$j]|");
}
print_r("<br>    ");
for ($i = 1; $i <= $m; $i++) { //Заполняем массива
    print_r("[$i]");
    for ($j = 1; $j <= $n; $j++) {
        $mass[$i][$j]=rand(-99, 99);
        print_r($mass[$i][$j]. "  ");
        if ((($mass[$i][$j])>$min) AND (($mass[$i][$j])<0)) {
            $min=$mass[$i][$j];
        }
    }
print_r("<br>");
}
?>
Наибольший отрицательный элемент в матрице P(m,n): 
<?php
print_r(  $min);
?>
</TABLE>
</BODY>
</HTML>
</HTML>