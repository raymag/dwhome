<?php
function getDayMoment(){
    $date = date("H");
    if($date<12){
        return "Bom dia!";
    }
    else if($date>=12 && $date <= 18){
        return "Boa Tarde!";
    }else{
        return "Boa Noite!";
    }
}
?>