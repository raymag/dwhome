<?php
function conexao(){
    $conn = mysqli_connect( "localhost", "root", "root", "magno_phpbd" );
    if ($conn){
        mysqli_set_charset($conn, "UTF8");
        return $conn;
    }else{
        return False;
    }
}
?>