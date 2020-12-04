<!DOCTYPE html>
<html>
<body bgcolor="#FFF5EE">
<h1> Задача №3 </h1>
<ins><h2> Вариант 3 </h2></ins>
<?php
$a = rand(-500, 500);
$Sum = 0;
for ($i = 2; $i <= $a-1; $i +=1)
{
if ($a % $i == 0)
{ $Sum += $i;
}
}
echo 'Заданное число N='.$a.'.<br>';
echo 'Характер N='.$Sum;
?>
 <ins><h2>Вариант 6</h2></ins>
  <?php
  $N=rand(1,999);
  $M=rand(1,999);
  echo "N = ", "$N","<br>";
  echo "M = ", "$M","<br>","<br>";
  echo "Числа, которые можно представить в виде суммы двух кубов:", "<br>","<br>";
  if($M>$N) {
    for ($i=($N+1);$i<$M;$i++) {
      for ($j=1;$j<$i;$j++) {
        for ($k=1;$k<$i;$k++) {
          if ($k>=$j) {
            if ((pow($j, 3)+pow($k, 3))==$i) {
              echo "$i = ", "$j<sup>3</sup> + $k<sup>3</sup>", "<br>";
              break;
            }
            else {
            }
          }
          else {
          }
        }
      }
    }
  }
  else {
    for ($i=($M+1);$i<$N;$i++) {
      for ($j=1;$j<$i;$j++) {
        for ($k=1;$k<$i;$k++) {
          if ($k>=$j) {
            if ((pow($j, 3)+pow($k, 3))==$i) {
              echo "$i = ", "$j<sup>3</sup> + $k<sup>3</sup>", "<br>";
              break;
            }
            else {
            }
          }
          else {
          }
        }
      }
    }
  }
  ?>
</body>
</html>
<b><p><a href="lab-2-11.php">ИЗМЕНИТЬ ЧИСЛА </a></p></b>
<p><a href="lab-2-10.php">Вернуться к задаче №2</a></p>

</body>
</html>