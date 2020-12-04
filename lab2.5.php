<!DOCTYPE html>
<html>
<head>
	<title>Калганова К.А._ИП_ЛР2</title>
  <body bgcolor="#F8F8FF">
</head>
<body>

 <h1>Задание №2.5</h1>
  <h2>Вариант 11</h2>
   <?php

function f($u, $t) {
    if ( $u>2)
        return pow($u^2+$t,1/3)*pow(sin($t),2);
    elseif ( $u <= 2)
        return log(abs($u^2/($u+$t)));
    
}

    echo "<br>","Найти значение переменной z, заданной суммой функций. Для нахождения значения
функции f(u,t) написать пользовательскую функцию. Числа a и b – случайные.","<br>";
  echo "<img src='v11.png'>";
$A=rand(-10,10);
$B=rand(-10,10);

echo "<br>","A = $A;","<br>","B = $B","<br>";

$result=sin(f($B,$A))+sqrt(abs(f($A,$B)));
echo "Результат = ","$result";

  ?>
  

  <h2>Вариант 14</h2>
  <?php

  function f2($u, $t) {
    if ( $u < -2 )
        return 2*$u;
    elseif ( $u >= -2 && $u <= 2 )
        return $t;
    elseif ( $u >= 0 && $t < 0 )
        return sin(pow($u,3))+log(abs($t));
      elseif ( $u >2)
        return pow(pow(cos($u),2)+pow(sin(pow($t,3)),4),1/4);}


    echo "<br>","Найти значение переменной z, заданной суммой функций. Для нахождения значения
функции f(u,t) написать пользовательскую функцию. Числа a и b – случайные.","<br>";
  echo "<img src='v14.png'>";
$A=rand(-10,10);
$B=rand(-10,10);

echo "<br>","A = $A;","<br>","B = $B","<br>";

$result=log(abs(f2($A,$B)))+f(pow($A,2),$A+$B);
echo "Результат = ","$result";
  ?>
  </body>
</html>
<p><a href="lab2.6.php">Перейти к Задаче №3 </a></p>
</body>
</html>
