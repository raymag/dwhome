<!DOCTYPE html>
<html><head>
<title>q1</title>
<meta name="author" content="Carlos Magno"/>
<link rel="stylesheet" href="../css/padrao.css"/>
</head>
<body>
  <form action="" method="post">
    <label>Número: <input type="number" name="n1"/></label><br/>
    <label>Número: <input type="number" name="n2"/></label><br/>
    <fieldset>
      <legend>Função</legend>
      <label>Somar<input type="radio" name="func" value="somar"></label><br/>
      <label>Subtrair<input type="radio" name="func" value="subtrair"></label><br/>
      <label>Multiplicar<input type="radio" name="func" value="multiplicar"></label><br/>
      <label>Dividir<input type="radio" name="func" value="dividir"></label><br/>
    </fieldset>
    <input type="submit" value="Executar"/>
  </form>
<?php
echo "<fieldset><legend>Resultado</legend>";
function calc($n1, $n2, $op){
  switch ($op) {
    case 'somar':
      $result = $n1+$n2;
      break;
    case 'subtrair':
      $result = $n1-$n2;
      break;
    case 'multiplicar':
      $result = $n1*$n2;
      break;
    case 'dividir':
      $result = $n1/$n2;
      break;
  }
  return $result;
}
echo calc($_POST["n1"], $_POST["n2"], $_POST["func"]);
echo "</fieldset>";
?>
</body>
</html>
