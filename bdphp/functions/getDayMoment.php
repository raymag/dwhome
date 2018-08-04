<?php
function getDayMoment(){
    date_default_timezone_set("America/Bahia");
    $date = date("H");  
    if($date<12 && $date>=5){
        return "Bom dia!";
    }
    else if($date>=12 && $date <= 18){
        return "Boa Tarde!";
    }else{
        return "Boa Noite!";
    }
}
?>