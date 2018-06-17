<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>treino</title>
    <link rel="stylesheet" href="../../Exercicios/css/padrao.css"/>
  </head>
  <body>
    <form action="" method="post">
      <label>Número<input type="number" name="num"></label>
      <input type="submit" value="Calcular">
    </form><br><br>

<?php
if(isset($_POST["num"])){
  $num = $_POST["num"];
  $fact = 1;
  while($num>1){
    $fact*=$num--;
  }
  echo $fact;
}
?>
  </body>
</html>
