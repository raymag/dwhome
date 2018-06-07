<!DOCTYPE html> 
<html lang="pt-br"> 
<head> 
<meta charset="utf-8"/> 
<meta name="author" content="Carlos Magno"/> 
<title>funcoes_array8 explode</title> 
<link rel="stylesheet" href="../css/padrao.css"/> 
</head> 
<body> 
<form action="" method="POST">
<label>Frase: <input type="text" name="phrase" id=""></label><br>
<label>Ponto de Ruptura: <input type="text" name="point" maxLength='1' id=""></label><br>
<input type="submit" value="Quebrar"><br>
</form>
<?php
if( isset($_POST["point"]) && $_POST["point"]!=""){
    $phrase = $_POST["phrase"];
    $breakpoint = $_POST["point"];
    $vetor = explode($breakpoint, $phrase);
    var_dump($vetor);
}

?> 
</body> 
</html>