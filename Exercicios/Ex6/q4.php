<!DOCTYPE html>
<html><head>
  <meta name="author" content="Carlos Magno"/>
  <link rel="stylesheet" href="../css/padrao.css"/>
<title>q4</title>
</head>
<body>
  <form action="" method="post">
    <label>Texto<input type="text" name="txt"/></label><br>
    <input type="submit" value="Executar">
  </form>
<?php
function mostranum($txt){
  $n = strlen($txt);
  for($i=1;$i<$n;$i++){
    echo "[".$i."]";
  }
}
if(isset($_POST["txt"])){
  mostranum($_POST["txt"]);
}
?>
</body>
</html>
