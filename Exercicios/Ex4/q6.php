<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Slide 4</title>
<link rel="stylesheet" href="../css/padrao.css"/>
</head>
<body>
<center>
<form action="" method="POST">
<label>Preço do Pão: <input type="number" required step="0.01" name="price"/></label>
<input type="submit" value="Calcular"/>
</form><br/>
<?php
$price = 1;
if(isset($_POST["price"])){
	$price = $_POST["price"];

	echo "<table border='2'><tr><th colspan='2'>
	Panificadora Pão de Ontem -
	 Tabela de Preços</th></tr><tr><th>Unidades</th>
	 <th>Valor</th></tr>";

	 for($i=1;$i<=50;$i++){
	  if($i%2==0){
	 	echo "<tr><td class='td-b'>$i - </td>";
	 	echo "<td class='td-b'>R$ ".(number_format(($i*$price), 2))."</td></tr>";
	  }else{
	 	echo "<tr><td class='td-a'>$i - </td>";
	 	echo "<td class='td-a'>R$ ".(number_format(($i*$price), 2))."</td></tr>";
	  }

	 }
}


// $i = 1;
// while($i<=50){
// 	if($i%2==0){
//   	echo "<tr><td class='td-b'>$i - </td>";
//   	echo "<td class='td-b'>R$ ".(number_format(($i*$price), 2))."</td></tr>";
//    }else{
//   	echo "<tr><td class='td-a'>$i - </td>";
//   	echo "<td class='td-a'>R$ ".(number_format(($i*$price), 2))."</td></tr>";
//    }
// 	$i++;
// }

echo "</table>";

?>
</center>
<body>
</html>
