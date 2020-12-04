<html>
<head> <title> Добавление нового приложения </title> </head>
<body>
<body bgcolor="#FFE4E1">
<H2>Добавление приложения:</H2>

<form action="save_new.php" metod="get">
    
Название: <input name="name" size="20" type="text">
<br>
<p>Версия: <input name="vers" size="15" type="text">
<br>
<p>Дата: <input name="data" size="15" type="date">
<br>
<p>ID разработчика: <input name="raz_id" size="5" type="text">
<br>
<p>ID языка: <input name="lang_id" size="5" type="text">

<p><input name="add_app" type="submit" value="Добавить">
<input name="b2" type="reset" value="Очистить"></p>
</form>
<p>
<a href="index.php"> Вернуться в меню </a>
</body>
</html>