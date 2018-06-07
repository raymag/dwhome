<!DOCTYPE html> 
<html lang="pt-br"> 
<head> 
<meta charset="utf-8"/> 
<meta name="author" content="Carlos Magno"/> 
<title>funcoes_array7 array_merge</title> 
<link rel="stylesheet" href="../css/padrao.css"/> 
</head> 
<body> 
<?php   
$v1[0] = "Café";
$v2[0] = "com";
$v2[1] = "Leite";

$drink = array_merge($v1, $v2);
for($i=0;$i<count($drink);$i++){
    echo $drink[$i]." ";
}

?> 
</body> 
</html>