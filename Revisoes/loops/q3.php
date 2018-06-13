<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<style>
.gray{
	background: #efefef;
}
th{
	background: #dedede;
}
td, th, table{
	border-radius: 5px;
	padding: 3px;
}
</style>
</head>
<body>
<center>
<table border="2">
<tr><th colspan="2">Sequência Fibonacci</th></tr>
<?php
$first = 0;
$second = 1;
echo "<tr><td>1"."º</td><td>$second</td></tr>";
for($count=1;$count<50;$count++){
	$third = $first+$second;
	$first = $second;
	$second = $third;
	if($count%2!=0){
		echo "<tr><td class='gray'>".($count+1)."º</td><td class='gray'>$second</td></tr>";
	}
	else{
		echo "<tr><td>".($count+1)."º</td><td>$second</td></tr>";
	}
}
?>
</table>
</center>
</body>
</html>