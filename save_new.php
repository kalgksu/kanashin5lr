<?php
require_once('connect.php');

if(isset($_GET['add'])){
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
 else { print "Ошибка сохранения. <a href=\"index.php\"> Вернуться в меню</a>"; }}
 
 
 if(isset($_GET['add_raz'])){
    $name = $_GET['name'];
    $city = $_GET['city']; 
    $sql_add = "INSERT INTO razrab (raz_name, raz_city) 
    VALUES ('$name', '$city')";
    if(mysqli_query($connection, $sql_add))
    { print "<p>Разработчик добавлен!";
    print "<p><a href=\"index.php\"> Вернуться в меню</a>"; }
    else { print "Ошибка сохранения. <a href=\"index.php\"> Вернуться в меню</a>"; }}

  if(isset($_GET['add_app'])){
    $raz_id = $_GET['raz_id'];
    $lang_id = $_GET['lang_id'];
    $data = $_GET['data'];
    $vers = $_GET['vers'];
    $name = $_GET['name'];
    $sql_add = "INSERT INTO `application` (`lang_id`, `raz_id`, `app_data`, `app_version`, `app_name`) VALUES ('$lang_id','$raz_id','$data','$vers','$name')";
    if(mysqli_query($connection, $sql_add))
    { print "<p>Приложение добавлено!";
    print "<p><a href=\"index.php\"> Вернуться в меню</a>"; }
    else { print "Ошибка сохранения. <a href=\"index.php\"> Вернуться в меню</a>"; }}
?>
