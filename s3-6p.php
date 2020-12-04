 <body bgcolor="#F0FFFF">
  <?

if(isset($_POST["reprint"])){
$text = str_split($_POST["popa"]);

for($i=0;$i<count($text);$i++)
  if($text[$i]==$_POST["simbolA"] && $text[$i+1]==$_POST["simbolB"])
    $text[$i] = "";
  for($i=0;$i<count($text);$i++)
echo $text[$i];
}

if(isset($_POST["find"])){
$count = 0;
$text = str_split($_POST["text"]);
for($i=0;$i<count($text);$i++){
if($text[$i]==$_POST["simb"]){
  printf("Символ стоит на позиции %d.  ",$i);
  $count++;
}
}
echo "<br>";
printf("Всего символ встречается %d раз(а).", $count);
}

if(isset($_POST["result"])){
  # Если она представляет собой запись целого числа
    if( preg_match( '~^[\d]+$~', $_POST["stroke"] ) )
        # Выводим единицу
        echo 1;
    # Если вещественного (с дробной частью)
    elseif( preg_match( '~^[\d]+\.[\d]+$~', $_POST["stroke"] ) )
        # Выводим двойку
        echo 2;
    # если строку нельзя преобразовать в число или число - 0
    elseif( ( (int) $str ) == 0 )
        # Выводим 0
        echo 0;
}

  ?>
