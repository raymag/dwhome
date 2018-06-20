<!DOCTYPE html> 
<html lang="pt-br"> 
<head> 
<meta charset="utf-8"/> 
<meta name="author" content="Carlos Magno"/> 
<title>funcoes_array6 count</title> 
<link rel="stylesheet" href="../css/padrao.css"/> 
</head> 
<body> 
<?php   
$limite = time()/1000/60/60;
for($i=0;$i<$limite;$i++){
    $vetor[$i] = $i;
}
echo "Há ".count($vetor)." elementos no vetor.";


?> 
</body> 
</html>