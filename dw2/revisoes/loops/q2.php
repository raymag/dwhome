<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Questão 2</title>
  </head>
  <body>
    <center>
    <form action="" method="post">
      <fieldset>
        <legend>Encontrar números primos</legend>
      <label> De <input type="number" name="min"> </label><br>
      <label> Até <input type="number" name="max"> </label><br>
      <input type="submit" value="Encontrar">
    </fieldset>
  </form><br>
<?php
if( isset($_POST["min"]) && isset($_POST["max"]) ){
  $min = $_POST["min"];
  $max = $_POST["max"];

  for($min; $min<=$max; $min++){

    $primo = true;
    for($sub = $min;--$sub>1;$sub){
      if( $min % $sub == 0 ){
        $primo = false;
        break;
      }
    }
    if($primo){
      echo "( $min )";
    }
  }
}
 ?>
</center>
  </body>
</html>
