<html>
<head> <title> Добавление нового языка </title> </head>
<body>
<body bgcolor="#FFE4E1">
<H2>Добавление языка:</H2>
<form action="save_new.php" metod="get">
Название: <input name="name" size="20" type="text">
<p>Тип: <SELECT NAME="type" SIZE="1">
    <OPTION VALUE="компилируемый" SELECTED> компилируемый </OPTION>
 <OPTION VALUE="интерпретируемый"> интерпретируемый </OPTION>
 </SELECT>
<p>Год разработки: <input name="year" size="10" type="text">
<p>Тип выполнения: <SELECT NAME="proc" SIZE="1">
    <OPTION VALUE="серверный" SELECTED> серверный </OPTION>
 <OPTION VALUE="клиентский"> клиентский </OPTION>
 </SELECT>
<p>Автор: <input name="autor" size="20" type="text">

<p><input name="add" type="submit" value="Добавить">
<input name="b2" type="reset" value="Очистить"></p>
</form>
<p>
<a href="index.php"> Вернуться в меню </a>
</body>
</html>