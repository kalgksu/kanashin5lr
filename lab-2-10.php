<!DOCTYPE html>
<html>
<body bgcolor="#FFF0F5">
<TABLE border=1>
<h1> Задача №2 </h1>
<?php
for ($i=0; $i<=9; $i++) {
echo ("<tr>");
for ($k=1; $k<=10; $k++) {
echo ("<td align=center>");
$p=$i*10+$k;
if($p%2==1)
{echo ($p);}
else
{echo '<p style="color: red; margin:0">'.$p.'</p>';};
echo ("</td>");
}
echo ("</tr>");
}
?>
</TABLE>
<p><a href="lab1-5.php">Вернуться к Задаче №1 </a></p>
<p><a href="lab-2-11.php">Перейти к Задаче №3</a></p>
</body>
</html>