<?php
function conexao(){
    $conn = mysqli_connect( "localhost", "root", "root", "magno_phpbd" );
    if ($conn){
        return $conn;
    }else{
        return False;
    }
}
?>