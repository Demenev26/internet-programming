<HTML>
<TITLE>  Деменев Константин ПИ-323</TITLE>
<BODY>
 <h1>Деменев Константин ПИ-323</h1><p>
Задача 2.5.<p>
Найти значение переменной z, заданной суммой функций. Для нахождения значения
функции f(u,t) написать пользовательскую функцию. Числа a и b – случайные.<p>

<?php
$a = rand(-50, 49);
$b = rand(-50, 49);
print('a = '. $a . '<br>'); //Выводим
print('b = '. $b . '<br>'); //Выводим

//z1
if (($a>0) AND (($b-1) >0)){
    $z1=pow($a, 2)+$b;
}
elseif (($a<=0) AND (($b-1) <=0)){
  $z1=$a+(pow($b-1,2))/3;
}  
elseif (($a>0) AND (($b-1) <=0)){
  $z1=($b-1)+2*$a;
} 
elseif (($a<=0) AND (($b-1) >0)){
  $z1=(pow($a, 2))-($b-1);
} 

//z2
if ((((pow($a, 2))/3)>0) AND ((pow($b, 3)) >=0)){
    $z2=pow(((pow($a, 2))/3), 2)+(pow($b, 3));
}
elseif ((((pow($a, 2))/3)<=0) AND ((pow($b, 3)) <=0)){
  $z2=(((pow($a, 2))/3)+((pow((pow($b, 3)),2))/3));
}  
elseif ((((pow($a, 2))/3)>0) AND ((pow($b, 3)) <=0)){
  $z2=(pow($b, 3))+2*(((pow($a, 2))/3));
} 
elseif ((((pow($a, 2))/3)<=0) AND ((pow($b, 3)) >0)){
  $z2=(pow(((pow($a, 2))/3), 2))-(pow($b, 3));
} 

//z3
if (((($a-1)/$b)>0) AND (($a*$b-4) >=0)){
    $z3=pow((($a-1)/$b), 2)+($a*$b-4);
}
elseif (((($a-1)/$b)<=0) AND (($a*$b-4) <=0)){
  $z3=(($a-1)/$b)+(pow(($a*$b-4),2))/3;
}  
elseif (((($a-1)/$b)>0) AND (($a*$b-4) <=0)){
  $z3=2*(($a-1)/$b)+($a*$b-4);
} 
elseif (((($a-1)/$b)<=0) AND (($a*$b-4) >0)){
  $z3=(pow((($a-1)/$b), 2))-($a*$b-4);
} 

print('z = f(a,b-1) + f((a^2)/3,b^3)- f((a-1)/b,ab-4) '. '<br>'); //Выводим
$z=$z1+$z2-$z3;
print('f(a,b-1) = '. $z1 . '<br>'); //Выводим
print('f((a^2)/3,b^3) = '. $z2 . '<br>'); //Выводим
print('f((a-1)/b,ab-4) = '. $z3 . '<br>'); //Выводим
print('z = '. $z); //Выводим
?>
</BODY>
</HTML>