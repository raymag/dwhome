<?php
function jsalert($text){
    $text = str_replace("'", '"', $text);
    return "<script>alert('".$text."')</script>";
}
?>