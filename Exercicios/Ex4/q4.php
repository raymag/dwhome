<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Slide 4</title>
<link rel="stylesheet" href="../css/padrao.css"/>
</head>
<body>
<form action="" method="POST">
<label>Base: <input type="number" required name="base"/></label><br/>
<label>Potência: <input type="number" required name="pow"/></label><br/>
<input type="submit" value="Calcular"/>
</form><br/>
<?php
if(isset($_POST["base"])&&isset($_POST["pow"])){
	$base = $_POST["base"];
	$pow = $_POST["pow"];
	$result = 1;

	for($pow;$pow>=1;$pow--){
		$result *= $base;
	}

	// while($pow>=1){
	// 	$pow--;
	// 	$result *= $base;
	// }
	echo $result;
	}
?>
<body>
</html>
