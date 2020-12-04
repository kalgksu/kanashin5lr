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

<h1 style="color:#800080">Список языков программирования</h1>
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
 <th> Название </th> <th> Тип </th> <th> Год разработки </th> <th> Тип выполнения </th> <th> Автор </th> 
 <th> Редактирование </th> <th> Удаление </th> </tr>
<?php
$res = mysqli_query($connection, "SELECT * FROM `lang`");
$res = mysqli_fetch_all($res);
  foreach ($res as $res) {
                ?>
                    <tr>
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

</body> </html>