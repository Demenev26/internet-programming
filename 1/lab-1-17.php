<TITLE> Задача 1-3 (4)</TITLE>
<body >
<h1 align="center">Деменев Константин ПИ-323</h1><p>
<h2>Задача 1-3<p>
4. Найти все целые числа из интервала от N до М, которые делятся на сумму всех своих
цифр. N и М – случайные числа.
</h2>
<?php
 $N = rand(0,249);
 $M = rand(250,500);
 echo "N = $N <br> M = $M <br> Числа из интервала от N до М, которые делятся на сумму всех своих
цифр: <br>";
for  ($l=$N; $l<=$M; $l++){
    $summ = 0;
    $l_tmp = $l;
    
    while ($l_tmp)
    {
        $summ += $l_tmp % 10;
        $l_tmp = floor($l_tmp/10);
    }
    if ($l % $summ == 0)
    {
        echo "$l   <br>";
    }
}
?>