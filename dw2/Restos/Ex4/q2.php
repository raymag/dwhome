<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Slide 4</title>
    <link rel="stylesheet" href="../css/padrao.css"/>
  </head>
  <body>
    <form action="" method="POST">
      <label>Número 1: <input type="number" name="n1"></label><br/>
      <label>Número 2: <input type="number" name="n2"></label><br/>
      <input type="submit" value="Calcular"/>
    </form>
<?php
if( (isset($_POST["n1"])) && (isset($_POST["n1"]))  ){
  $n1 = $_POST["n1"];
  $n2 = $_POST["n2"];
  if($n1>$n2){
    $high = $n1;
    $low = $n2;
  }else{
    $high = $n2;
    $low = $n1;
  }
  for($i=++$low;$i<$high;$i++){
    echo $i." ";
  }
}

?>
  </body>
</html>
