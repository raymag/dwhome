<!DOCTYPE html> 
<html lang="pt-br"> 
<head> <meta charset="utf-8"/> 
<meta name="author" content="Carlos Magno"/> 
<title>funcoes_array9 implode</title> 
<link rel="stylesheet" href="../css/padrao.css"/> 
</head> 
<body> 
<?php   
$vetor[0] = '"Não';
$vetor[1] = 'consigo"';
$vetor[2] = "é";
$vetor[3] = "só";
$vetor[4] = "mais";
$vetor[5] = "uma";
$vetor[6] = "desculpa";
$vetor[7] = "patética";

echo implode(" ", $vetor);
?> 
</body> 
</html>