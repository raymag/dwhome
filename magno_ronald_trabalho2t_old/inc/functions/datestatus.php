<?php
function datestatus($date){
    date_default_timezone_set('America/Sao_Paulo'); 
    if (date("Y", strtotime($date)) != date("Y")){
        return date("d-m-Y");
    }else{
        if(date("m", strtotime($date)) != date("m")){
            return date("d/m");
        }else{
            if(date("d", strtotime($date)) == date("d") ){
                if( date("H", strtotime($date)) == date("H")){
                    if( date("i", strtotime($date)) == date("i")){
                        return "Agora pouco";
                    }else{
                        if( (date("i")-date("i", strtotime($date))) ==1 ){
                            return (date("i")-date("i", strtotime($date)))." minuto atrás...";
                        }else{
                            return (date("i")-date("i", strtotime($date)))." minutos atrás...";
                        }
                    }
                }else{
                    if( (date("H")-date("H", strtotime($date)))==1 ){
                        return "1 hora atrás";
                    }else{
                        return date("H")-date("H", strtotime($date))." horas atrás...";
                    }
                }
            }else{
                if( (date("d")-date("d", strtotime($date))) == 1 ){
                    return "Ontem";
                }else{
                    return (date("d")-date("d", strtotime($date)))." atrás...";
                }
            }
        }
    }
}
?>