<?php
$chicoHeight = 1.5;
$chicoGrowth = 0.2;

$zeHeight = 1.1;
$zeGrowth = 0.3;

for($years = 0;$zeHeight<=$chicoHeight;$years++){
	$zeHeight += $zeGrowth;
	$chicoHeight += $chicoGrowth;
}
echo "Serão necessários ".$years." anos.";
?>