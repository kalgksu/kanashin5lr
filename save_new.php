<?php
require_once('connect.php');
$name = $_GET['name'];
$type = $_GET['type'];
$year = $_GET['year'];
$proc = $_GET['proc'];
$autor = $_GET['autor'];


$sql_add = "INSERT INTO lang (lang_name, lang_type, lang_year, lang_proc, lang_autor) 
VALUES ('$name', '$type', '$year', '$proc', '$autor')";

 if(mysqli_query($connection, $sql_add))
 { print "<p>Язык добавлен!";
 print "<p><a href=\"index.php\"> Вернуться в меню</a>"; }
 else { print "Ошибка сохранения. <a href=\"index.php\"> Вернуться в меню</a>"; }
?>
