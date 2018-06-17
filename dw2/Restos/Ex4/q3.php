<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="" method="GET">
      <label>Número 1: <input type="number" name="n1"></label><br/>
      <label>Número 2: <input type="number" name="n2"></label><br/>
      <input type="submit" value="Calcular"/>
    </form>
<?php
$n1 = $_GET["n1"];
$n2 = $_GET["n2"];
$sum = 0;
if($n1>$n2){
  $high = $n1;
  $low = $n2;
}else{
  $high = $n2;
  $low = $n1;
}
for($i=++$low;$i<$high;$i++){
  echo $i."<br/>";
  $sum+=$i;
}
echo "Total: ".$sum;
?>
  </body>
</html>
