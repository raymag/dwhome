<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Slide 4</title>
    <link rel="stylesheet" href="../css/padrao.css"/>
  </head>
  <body>
    <form action="" method="POST">
      <label>Nome: <input type="text" name="nome"></label>
      <input type="submit" value="Calcular"/>
    </form>
<?php
if(isset($_POST["nome"])){
  $nome = $_POST["nome"];
  for($i=0;$i<200;$i++){
    echo $nome."<br/>";
  }
}
?>
  </body>
</html>
