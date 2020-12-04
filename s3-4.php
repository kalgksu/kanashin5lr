<!DOCTYPE html>
<html>
<head>
	<title>КалгановаКА_ИП_ЛР3</title>
 <body bgcolor="#F0FFFF">
</head>
<body>
 <h1>Задание №3.4</h1>
  <FORM method="post" action="<?php print $PHP_SELF ?>">
 Введите логин:  <INPUT type="text" name="login" size="3">
 <P> <INPUT type="submit" name="enter" value="Войти">
</FORM>

<?php
if (isset($_POST["enter"])) {
if($_POST["login"]=="Pipindr") {echo "Здравствуйте, Пипиндр Пипиндрович!";}
else if($_POST["login"]=="Popo") {echo "Здравствуйте, Попо Попович!";}
else if($_POST["login"]=="Putin") {echo "Здравствуйте, Владимир Путин!";}
else if($_POST["login"]=="Uzbek") {echo "Здравствуйте, Узбек Узбекович!";}
else {echo "Такой пользователь не зарегестрирован на сайте.";}
}
?>

</body>
</html>