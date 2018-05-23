<!DOCTYPE html>
<html><head>
  <meta name="author" content="Carlos Magno"/>
  <link rel="stylesheet" href="../css/padrao.css"/>
<title>q3</title>
</head>
<body>
  <form action="" method="post">
    <label>Texto <textarea name="texto" rows="8" cols="50"></textarea></label><br>
    <input type="submit" value="Executar">
  </form>
<?php
function txt4($texto){
  $texto = str_replace("a", "4", $texto);
  $texto = str_replace("A", "4", $texto);
  return $texto;
}
if(isset($_POST["texto"])){
  echo txt4($_POST["texto"]);
}
?>
</body>
</html>
