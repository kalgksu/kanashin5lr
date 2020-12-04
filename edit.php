
<html>
<head>
<title> Редактирование  </title>
<body bgcolor="#FFE4E1">
</head>
<body>
<?php
require_once('connect.php');
$id = $_GET['id'];
 $res = mysqli_query($connection,"SELECT * FROM lang WHERE lang_id= '$id'");
 $res = mysqli_fetch_assoc($res);
?>
<H2>Редактирование: </H2>

<form action="save_edit.php" metod="get">
<input type="hidden" name="id" value="<?= $res['lang_id'] ?>">
Название: <input name="name" size="20" type="text" value="<?= $res['lang_name']?>">
<p>Тип: 
 <SELECT NAME="type" SIZE="1">
    <OPTION VALUE="compiled" SELECTED> compiled </OPTION>
    <OPTION VALUE="interpretable"> interpretable </OPTION>
 </SELECT>
<p>Год разработки: <input name="year" size="10" type="text" value="<?= $res['lang_year']?>">
<p>Тип выполнения: 
 <SELECT NAME="proc" SIZE="1">
    <OPTION VALUE="server" SELECTED> server </OPTION>
    <OPTION VALUE="client"> client </OPTION>
 </SELECT>
 
<p>Автор: <input name="autor" size="20" type="text" value="<?= $res['lang_autor']?>">

<p><input name="edit" type="submit" value="Изменить">
</form>

</body