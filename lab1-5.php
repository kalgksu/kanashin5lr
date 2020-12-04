<!DOCTYPE html>
<html>
<body bgcolor="#F0FFFF">
<h1>Задача №1</h1>
<ins><h2>Вариант 11</h2></ins><h3>Формула: (|c-(d/2)|*(b-7))/(2*a-1) </h3>
<?php
$a=rand(-20,20);
$b=rand(-20,20);
$c=rand(-20,20);
$d=rand(-20,20);
$result= (($c-$d/2)*($b-7))/(2*$a-1);
echo "(|$c-($d/2)|*($b-7))/(2*$a-1)=" .$result;
?>
<ins><h2>Вариант 14</h2></ins><h3>Формула: ((c/d+3*(a/2))/c-a+1) </h3>
<?php
$a=rand(-20,20);
$c=rand(-20,20);
$d=rand(-20,20);
$result= (($c/$d+3*($a/2))/$c-$a+1);
echo "(($c/$d+3*($a/2))/$c-($a+1)=" .$result;
?>
<b><p><a href="lab1-5.php">ИЗМЕНИТЬ ЧИСЛА </a></p></b>
<p><a href="lab-2-10.php">Перейти к Задаче №2 </a></p>

</body>
</html>