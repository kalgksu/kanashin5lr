<html>
<head> <title> Добавление нового приложения </title> </head>
<body>
<body bgcolor="#FFE4E1">
    <?php
require_once('connect.php');
$id = $_GET['id'];
 $res = mysqli_query($connection,"SELECT * FROM razrab WHERE raz_id= '$id'");
 $res = mysqli_fetch_assoc($res);
?>
<H2>Добавление приложения:</H2>

<form action="save_edit.php" metod="get">
<input name="id" type="hidden" value="<?= $res['raz_id']?>">    
Имя: <input name="name" size="20" type="text" value="<?= $res['raz_name']?>">
<br>
<p>Город разработки: <input name="city" size="15" type="text" value="<?= $res['raz_city']?>">

<p><input name="edit_raz" type="submit" value="Изменить">
<input name="b2" type="reset" value="Очистить"></p>
</form>
<p>
<a href="index.php"> Вернуться в меню </a>
</body>
</html>