<!DOCTYPE html>
<html><head>
  <meta name="author" content="Carlos Magno"/>
  <link rel="stylesheet" href="../css/padrao.css"/>
<title>q2</title>
</head>
<body>
  <form action="" method="post">
    <label>Número<input type="number" name="num"/></label><br/>
    <input type="submit" value="Executar">
  </form>
<?php
function raiz($num){
  if($num>=0){
    $result = sqrt($num);
    $result = number_format($result, 2);
    return $result;
  }
  return "Valor Inválido";
}

echo "<fieldset>";
echo "<legend>Resultado</legend>";
echo "√".$_POST["num"]." = ".raiz($_POST["num"]);
echo "</fieldset>";
?>
</body>
</html>
