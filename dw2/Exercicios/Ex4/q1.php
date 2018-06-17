<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Slide 4</title>
<link rel="stylesheet" href="../css/padrao.css"/>
</head>
<body>
<form action="" method="GET">
<label>Nome: <input type="text" name="nome"/></label>
<input type="submit" value="Calcular"/>
</form><br/>
<?php
$nome = '';
if(isset($_GET["nome"])){
	$nome = $_GET["nome"];
}

for($i=0;$i<200;$i++){
	echo $nome." ";
}

// $i = 0;
// while($i++<200){
// 	echo $nome." ";
// }
?>
<body>
</html>
