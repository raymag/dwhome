<?php
function fixquot($str){
    $str = str_replace("'", "''", $str);
    $str = str_replace('"', '""', $str);
    return $str;
}