<!DOCTYPE html>
<html>
<head>
	<title>КалгановаК.А._ИП_ЛР2</title>
 <body bgcolor="#FAF0E6">
</head>
<body>

 <h1>Задание №2.4</h1>
  <h2>Вариант 11</h2>
  <table border="1">
   <?php

    echo "<br>","Для целочисленного массива A(N) вычислить сумму тех элементов, которые
удовлетворяют условию A[i] < i^2","<br>";



$array = array();
$sum=0;
echo "<br>","Иходный массив: ","<br>";

for ($i=0; $i<=9;$i++){

$array[$i]=rand(-10,10);

echo "<th>","$array[$i]","</th>","   "; 
}

echo "</table>";

for ($i=9;$i>=1;$i--) {
if($array[$i]<pow($i,2))
  $sum+=$array[$i];
}
echo "<br>","<br>","Сумма удовлетворяющая условию :  ","$sum","<br>";

  ?>
  

  <h2>Вариант 14</h2>
  <?php

  echo "<br>","Дан массив действительных чисел A(N). Заменить все элементы массива находящиеся","<br>","
в интервале от с1 до с2 на минимальный. Исходный и скорректированный массивы вывести на экран.","<br>";

   $massive = array();
   $c1=rand(0,9);
   $c2=rand(0,9);

echo "<br>","Иходный массив: ","<br>";
echo "<table border>";
for ($i=0; $i<=9;$i++){

$massive[$i]=rand(-10,10);

echo "<th>","$massive[$i]","</th>","   "; 
}
echo "</table>";
echo "C1 = ","$c1","</br>";
echo "C2 = ","$c2","</br>";

$min=$massive[0];

    for($i=0;$i<=9;$i++)
if($min>$massive[$i])
  $min=$massive[$i];
    
    if($c1<$c2)
    {
      for($i=$c1;$i<=$c2;$i++)
        $massive[$i]=$min;
    }
    elseif($c2<$c1){
       for($i=$c2;$i<=$c1;$i++)
        $massive[$i]=$min;
    }

echo "<br>","Обработанный массив: ","<br>";
echo "<table border>";
for ($i=0; $i<=9;$i++){
echo "<th>","$massive[$i]","</th>","   "; 
}
echo "</table>";

  ?>
 </body> 
</html>
<b><p><a href="lab2.4.php">ИЗМЕНИТЬ ЧИСЛА </a></p></b>
<p><a href="lab2.5.php">Перейти к Задаче №2 </a></p>
</body>
</html>
