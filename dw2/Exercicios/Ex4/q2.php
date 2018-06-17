<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Slide 4</title>
<link rel="stylesheet" href="../css/padrao.css"/>
</head>
<body>
<form action="" method="POST">
<label>Número: <input type="number" name="n1"/></label><br/>
<label>Número: <input type="number" name="n2"/></label><br/>
<input type="submit" value="Calcular"/>
</form><br/>
<?php
$n1 = 0;
$n2 = 0;
if(isset($_POST["n1"])&&isset($_POST["n2"])){
	$n1 = $_POST["n1"];
	$n2 = $_POST["n2"];
}
If($n1>$n2){
	$high = $n1;
	$low = $n2;
}else{
	$high = $n2;
	$low = $n1;
}
for(++$low;$high>$low;$low++){
	echo $low." ";
}

// $low++;
// while($high>$low){
// 	echo $low." ";
// 	$low++;
// }
?>
<body>
</html>
