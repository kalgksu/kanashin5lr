<!DOCTYPE html>
<html>
<head>
  <title>КалгановаК.А._ИП_ЛР2</title>
 <body bgcolor="#FAF0E6">
</head>
<body>
  <h1>Задание №2.6</h1>
  
  <?php
    

function fill(& $massive){
 
for($i=0;$i<5;$i++)
{
  for($j=0;$j<5;$j++)
    $massive[$i][$j] = rand(-10,10);  
}
}

function printmas(& $massive){

  for($i=0;$i<count($massive);$i++)
{
  for($j=0;$j<count($massive);$j++){
    echo $massive[$i][$j]." | ";
  }
  echo "<br />";
}

}
function changemas(& $massivecopy,& $massive){
for($i = 0;$i < 5; $i++) 
{
for($j = 1; $j < 4; $j++) {
$massivecopy[$i][$j] = $massive[$i][$j-1]+$massive[$i][$j+1];}

$massivecopy[$i][0]= $massive[$i][1];
$massivecopy[$i][4]= $massive[$i][3];
}
}
function fillspir(& $massivespir, $n,$m){
if($n % 2 != 0){
        $massive[($n / 2)][($n / 2)] = ($n * $n);      
    }
    
    for($i = 0; $i < ($n / 2); $i++){
        for($j = $i; $j < ($n - $i); $j++){   
            $massivespir[$i][$j] = $m;
            $m++;
        }
        for($j = 1; $j < ($n - $i - $i); $j++){   
            $massivespir[($j + $i)][($n - $i) - 1] = $m;   
            $m++;
        }
        for($j = ($n - 2) - $i; $j >= $i; $j--){  
            $massivespir[($n - $i) - 1][($j)] = $m;            
            $m++;
        }
        for($j = (($n - $i) - 2); $j > $i; $j--){
            $massivespir[$j][$i] = $m;
            $m++;
        }
    }
}

function wrtq(){
  echo "Заменить значение каждого элемента двумерной таблицы A(m,n) на сумму элементов,
соседних с ним в строке, оставляя границу массива неизменной.","<br/>";
}
function wrtq2(){
  echo "Заполнить квадратную матрицу 10x10 последовательными числами от 1 до 100 по спирали.","<br/>";
}


?>


<form method="get">
  <input type="submit" name="btm1" id="Question" value="Вариант 11" /><br/>
    <input type="submit" name="btm2" id="fill" value="Вариант 14" /><br/>
      </form>
<?php

$massive = array(array());
$massivecopy = array(array());


if(isset($_GET['btm1'])){
wrtq();
fill($massive);
printmas($massive);
$massivecopy = array_replace([], $massive);
echo "Обработанный массив:","<br/>";
changemas($massivecopy,$massive);
printmas($massivecopy);
}
if(isset($_GET['btm2'])){
  $n=10;
  $m=1;
wrtq2();
fillspir($massivespir,$n,$m);
printmas($massivespir);
}
?>
</body>
</html>