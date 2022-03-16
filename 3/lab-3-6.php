<?php
//1
if (isset($_POST["firstButton"])) {
  $ch = array(". ", "!", "?", "...");
    $pre=0;
     for ($i = 0; $i < 4; $i++) {
    $pre=$pre+mb_substr_count($_POST["text1"],$ch[$i]);
    }
echo("Количество предложений: ".$pre);
}
//2
if (isset($_POST["secondButton"])) {
$r1="";
print("Исходная строка:<br /> ".$_POST['text2']."<br><br>" );
$b=$_POST['a1'].$_POST['a2'];
$str1=str_replace($b,'',$_POST['text2']);
print("Преобразованная строка:<br /> ".str_replace(mb_strtoupper($b, 'UTF-8'),'',$str1));
 
}

//3
if (isset($_POST["thirdButton"])) {
echo "Исходное слово: ".$_POST["text3"]."<br>";
echo "Зашифрованное слово: ";
$string=$_POST["text3"];
$arr = array ();
$strlen = mb_strlen ($string);
while ($strlen) {
$arr[] = mb_substr ($string, 0, 1);
$string = mb_substr ($string, 1, $strlen);
$strlen = mb_strlen ($string);
}
for ($i = 0; $i <= (count($arr)-1); $i++) {
if ($i%2<>0) {
echo $arr[$i];
}
}
for ($i = (count($arr)-1); $i >=0 ; $i--) {
if ($i%2==0) {
echo $arr[$i];
}
}

}
?>