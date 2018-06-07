 <!DOCTYPE html>
<html lang="pt-br">
<head> 
<meta charset="utf-8"/> 
<meta name="author" content="Carlos Magno"/> 
<title>funcoes_array1 - is_array</title> 
<link rel="stylesheet" href="../css/padrao.css"/> 
</head> 
<body> 
<?php
function isvector($vetor){
    if(is_array($vetor)){
        echo "É um vetor";
    }else{
        echo "Não é um vetor";
    }
}
$array[0] = 0;
$array[1] = 1;
$n_array = 2018;
isvector($array);
echo "<br/>";
isvector($n_array);


?> 
</body> 
</html>