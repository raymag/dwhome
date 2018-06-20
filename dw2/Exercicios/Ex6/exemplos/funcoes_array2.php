 <!DOCTYPE html> 
 <html lang="pt-br">
<head> 
<meta charset="utf-8"/> 
<meta name="author" content="Carlos Magno"/> 
<title>funcoes_array2 in_array</title> 
<link rel="stylesheet" href="../css/padrao.css"/> 
</head> 
<body> 
<form action="" method="POST">
<label>Buscar número:<input type="number" name="num"/></label><br>
<input type="submit" value="Procurar"><br>
</form>
<?php   
function temnoarray($valor, $array){
    if(in_array($valor, $array)){
        echo "$valor está no array<br/>";
    }else{
        echo "$valor não está no array<br/>";
    }
}
for($i=0;$i<10;$i++){
    $vetor[$i] = $i*(5+$i);
}
if( isset($_POST["num"]) && $_POST["num"]!=""){
    temnoarray($_POST["num"], $vetor);
}

?> 
</body> 
</html>