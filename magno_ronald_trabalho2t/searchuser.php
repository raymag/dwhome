<?php
session_start();
if(isset($_POST["username"]) && $_SESSION["email"]){
    $user_email= $_SESSION["email"];
    $alvo = $_POST["username"];
    include "inc/functions/conexao.php";
    $conn = conecta_mysql();

    if(isset($alvo[0]) ){
        $sql = "SELECT email, nome FROM usuario WHERE email LIKE '$alvo%' OR nome LIKE '$alvo%'";
        // echo $sql;

        if($query = mysqli_query($conn, $sql)){
            $emails = array();
            while($row = mysqli_fetch_array($query, MYSQLI_ASSOC)){
                $emails[] = $row;
            }
            foreach($emails as $email){
                echo "<br/><hr/>";
                echo "<p class='search-data-text'>Nome: <b>".$email["nome"]."</b><p/>";
                echo "<p class='search-data-text'>Email: <b>".$email["email"]."</b></p>";
                echo "<a href='enviar_msg.php?mailto=".$email["email"]."'>Enviar Mensagem</a>";
                echo "<hr/><br/>";
            }
            if(empty($emails)){
                echo "<p>Não há resultados para a pesquisa.</p>";
            }
        }
        
    }else{
        echo "<p>Primeiro pesquise por um email.</p>";
    }
}else{
    header("Location:index.php");
}
?>