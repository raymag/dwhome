<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../css/padrao.css">
  </head>
<body>

<?php
$nome = 'Gabriel';

for($i = 0; $i < 30; $i++){
  $nomes[$i] = $nome;
}
#print_r($nomes);

for($i = 0; $i < 30; $i++){
  print("[$i] ".$nomes[$i]);
  print("<br/>");
}

 ?>





</body>
</html>
