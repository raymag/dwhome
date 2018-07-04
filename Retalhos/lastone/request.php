<?php
$data = $_GET["data"];
$words = explode(" ", $data);
foreach($words as $word){
    $nWords[] = ucfirst($word);
}
echo implode(" ", $nWords);
?>