<?php
require_once('connect.php');

if(isset($_GET['edit'])){
$id = $_GET['id'];
$name = $_GET['name'];
$type = $_GET['type'];
$year = $_GET['year'];
$proc = $_GET['proc'];
$autor = $_GET['autor'];
$sql_change = "UPDATE `lang` SET `lang_name` = '$name', `lang_type` = '$type', `lang_year` = '$year', `lang_proc` = '$proc', `lang_autor` = '$autor' WHERE `lang`.`lang_id` = '$id'";
mysqli_query($connection,$sql_change);
header('Location: index.php');}

if(isset($_GET['edit_app'])){
$id = $_GET['id'];
$raz_id = $_GET['raz_id'];
$lang_id = $_GET['lang_id'];
$data = $_GET['data'];
$vers = $_GET['vers'];
$name = $_GET['name'];
$sql_change = "UPDATE `application` SET `raz_id` = '$raz_id',`lang_id`='$lang_id', `app_data` = '$data',
`app_version` = '$vers', `app_name` = '$name' 
WHERE `application`.`app_id` = '$id'";
mysqli_query($connection,$sql_change);
header('Location: index.php');}

if(isset($_GET['edit_raz']))
{
    $id = $_GET['id'];
    $city = $_GET['city'];
    $name = $_GET['name'];
    $sql_change = "UPDATE `razrab` SET `raz_name` = '$name', `raz_city` = '$city' WHERE `razrab`.`raz_id` = '$id'";
mysqli_query($connection,$sql_change);
header('Location: index.php');
}
?>
