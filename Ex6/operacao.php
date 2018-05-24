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
      <label>Somar<input type="radio" name="func" value="+" checked></label><br/>
      <label>Subtrair<input type="radio" name="func" value="-"></label><br/>
      <label>Multiplicar<input type="radio" name="func" value="*"></label><br/>
      <label>Dividir<input type="radio" name="func" value="/"></label><br/>
    </fieldset>
    <input type="submit" value="Executar"/>
  </form>
<?php
echo "<fieldset><legend>Resultado</legend>";
function calc($n1, $n2, $op){
  switch ($op) {
    case '+':
      $result = $n1+$n2;
      break;
    case '-':
      $result = $n1-$n2;
      break;
    case '*':
      $result = $n1*$n2;
      break;
    case '/':
      $result = $n1/$n2;
      break;
  }
  return $result;
}
if( ( isset($_POST["n1"]) && is_numeric($_POST["n1"]) )
	&& ( isset($_POST["n2"]) && is_numeric($_POST["n2"]) )){
	echo $_POST["n1"]." ".$_POST["func"]
	." ".$_POST["n2"]." = "
	.calc($_POST["n1"], $_POST["n2"], $_POST["func"]);
}
echo "</fieldset>";
?>
</body>
</html>
