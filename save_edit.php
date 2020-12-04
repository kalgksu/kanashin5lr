<?php
require_once('connect.php');
$id = $_GET['id'];
$name = $_GET['name'];
$type = $_GET['type'];
$year = $_GET['year'];
$proc = $_GET['proc'];
$autor = $_GET['autor'];
$sql_change = "UPDATE `lang` SET `lang_name` = '$name', `lang_type` = '$type', `lang_year` = '$year', `lang_proc` = '$proc', `lang_autor` = '$autor' WHERE `lang`.`lang_id` = '$id'";
mysqli_query($connection,$sql_change);
header('Location: index.php')
?>
