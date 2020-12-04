<html>
<head> <title> Добавление нового приложения </title> </head>
<body>
<body bgcolor="#FFE4E1">
    <?php
require_once('connect.php');
$id = $_GET['id'];
 $res = mysqli_query($connection,"SELECT * FROM application WHERE app_id= '$id'");
 $res = mysqli_fetch_assoc($res);
?>
<H2>Добавление приложения:</H2>

<form action="save_edit.php" metod="get">
<input name="id" type="hidden" value="<?= $res['app_id']?>">    
Название: <input name="name" size="20" type="text" value="<?= $res['app_name']?>">
<br>
<p>Версия: <input name="vers" size="15" type="text" value="<?= $res['app_version']?>">
<br>
<p>Дата: <input name="data" size="15" type="date" value="<?= $res['app_data']?>">
<br>
<p>ID разработчика: <input name="raz_id" size="5" type="text" value="<?= $res['raz_id']?>">
<br>
<p>ID языка: <input name="lang_id" size="5" type="text" value="<?= $res['lang_id']?>">

<p><input name="edit_app" type="submit" value="Изменить">
<input name="b2" type="reset" value="Очистить"></p>
</form>
<p>
<a href="index.php"> Вернуться в меню </a>
</body>
</html>