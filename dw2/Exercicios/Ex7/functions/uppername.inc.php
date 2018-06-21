<?php
function uppername($name){
    $name = strtoupper($name);
    $name = str_replace("á", "Á", $name);
    $name = str_replace("à", "À", $name);
    $name = str_replace("ã", "Â", $name);
    $name = str_replace("â", "Â", $name);
    $name = str_replace("é", "É", $name);
    $name = str_replace("è", "È", $name);
    $name = str_replace("ê", "Ê", $name);
    $name = str_replace("ó", "Ó", $name);
    $name = str_replace("ò", "ò", $name);
    $name = str_replace("õ", "Õ", $name);
    $name = str_replace("ô", "Ô", $name);
    return $name;
}
?>