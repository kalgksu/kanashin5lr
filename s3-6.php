<!DOCTYPE html>
<html>
<head>
	<title>КалгановаКА_ИП_ЛР3</title>
 <body bgcolor="#F0FFFF">
</head>
<body>
 <h1>Задание №3.6</h1>

<h2>Вариант 11</h2>
Пользователем задается произвольный текст и два символа. Перепечатать заданныйтекст,<br> удалив из него все вхождения первого символа, непосредственно за которыми идет второй символ. <br><br>
 <FORM method="POST" action="s3-6p.php">
 Введите текст:  <INPUT type="text" name="popa" size="40">
 <br>
 Введите первый символ:  <INPUT type="text" name="simbolA" size="3"> <br>
 Введите второй символ:  <INPUT type="text" name="simbolB" size="3">
 <P> <INPUT type="submit" name="reprint" value="Перепечатать">
</FORM>
 <h2>Вариант 14</h2>
 Определить число повторений заданного символа в заданном тексте и порядковые позиции
вхождения символа в текст.
 <br><br>

 <FORM method="POST" action="s3-6p.php">
 Введите текст:  <INPUT type="text" name="text" size="50">
 Введите символ:  <INPUT type="text" name="simb" size="3">
 <P> <INPUT type="submit" name="find" value="Подсчитать">
</FORM>

 <h2>Вариант 17</h2>
  Дана строка. Если она представляет собой запись целого числа, то вывести 1; если
вещественного (с дробной частью), <br> то вывести 2; если строку нельзя преобразовать в
число, то вывести 0. 
 <br><br>

  <FORM method="POST" action="s3-6p.php">
 Введите строку:  <INPUT type="text" name="stroke" size="30">
 <br>
 <P> <INPUT type="submit" name="result" value="Уточнить">
</FORM>




</body>
</html>