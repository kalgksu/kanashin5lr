<?
require_once('connect.php');
?>

<html>
<head> <title> Сведения о языках </title> </head>

<body bgcolor="#FFE4E1">
   <style>
   h1 {
    font-family: Geneva, Arial, Helvetica, sans-serif;
   } 
  </style>

<h1 style="color:#800080">Языки программирования</h1>
<table border="2">
    <style>
   table {
    width: 50%; 
    border-collapse: collapse; 
   }
   td, th {
    padding: 4px; 
    border: 1px solid #000080; 
   }
   th {
    background: #C71585; 
    color: #ffe; 
    text-align: left; 
    font-family: Arial, Helvetica, sans-serif; 
    font-size: 0.9em; 
   }
  </style>
 
<tr> 
 <th> ID </th> <th> Название </th> <th> Тип </th> <th> Год разработки </th> <th> Тип выполнения </th> <th> Автор </th> 
 <th> Редактирование </th> <th> Удаление </th> </tr>
<?php
$res = mysqli_query($connection, "SELECT * FROM `lang`");
$res = mysqli_fetch_all($res);
  foreach ($res as $res) {
                ?>
                    <tr>
                        <td><?= $res[0] ?></td>
                        <td><?= $res[1] ?></td>
                        <td><?= $res[2] ?></td>
                        <td><?= $res[3] ?></td>
                        <td><?= $res[4] ?></td>
                        <td><?= $res[5] ?></td>
                        <td><a href="edit.php?id=<?= $res[0] ?>">Изменить</a></td>
                        <td><a href="delete.php?id=<?= $res[0] ?>">Уничтожить</a></td>
                    </tr>
                <?php
            }
        ?>
        <?
print "</table>";
?>

<p> <a href="new.php"> Добавить новый язык </a>

<h1 style="color:#800080">Разработчики</h1>
<table border="2">
<tr> 
 <th> ID </th> <th> Имя разработчика </th> <th> Город разработки </th>  <th> Редактирование </th> <th> Удаление </th> </tr>
<?php
$res = mysqli_query($connection, "SELECT * FROM `razrab`");
$res = mysqli_fetch_all($res);
  foreach ($res as $res) {
                ?>
                    <tr>
                        <td><?= $res[0] ?></td>
                        <td><?= $res[1] ?></td>
                        <td><?= $res[2] ?></td>
                        <td><a href="edit_raz.php?id=<?= $res[0] ?>">Изменить</a></td>
                        <td><a href="del_raz.php?id=<?= $res[0] ?>">Уничтожить</a></td>
                    </tr>
                <?php
            }
        ?>
        <?
print "</table>";
?>
<p> <a href="new_raz.php"> Добавить нового разработчика </a>
<br>
<h1 style="color:#800080">Приложения</h1>
<table border="2">
<tr> 
 <th> ID </th> <th> ID языка </th> <th> ID разработчика </th><th> Дата разработки </th>
   <th> Версия </th> <th> Название </th>  <th>Редактирование </th> <th> Удаление </th> </tr>
<?php
$res = mysqli_query($connection, "SELECT * FROM `application`");
$res = mysqli_fetch_all($res);
  foreach ($res as $res) {
                ?>
                    <tr>
                        <td><?= $res[0] ?></td>
                        <td><?= $res[1] ?></td>
                        <td><?= $res[2] ?></td>
                        <td><?= $res[3] ?></td>
                        <td><?= $res[4] ?></td>
                        <td><?= $res[5] ?></td>
                        <td><a href="edit_app.php?id=<?= $res[0] ?>">Изменить</a></td>
                        <td><a href="del_app.php?id=<?= $res[0] ?>">Уничтожить</a></td>
                    </tr>
                <?php
            }
        ?>
        <?
print "</table>";
?>
<p> <a href="new_app.php"> Добавить новое приложение </a>
<br><br>
<p> <a href="gen_pdf.php"> Скачать PDF </a>
<br><br>
<p> <a href="gen_excel.php"> Скачать Excel </a>
<br><br>
</body> </html>