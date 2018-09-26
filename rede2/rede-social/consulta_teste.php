<?php
include("conexao.php");
$conn = conecta_mysql();
$sql = "SELECT * FROM usuarios";
// $userData = mysqli_fetch_array(mysqli_query($conn, $sql), MYSQLI_NUM);
if($sql = mysqli_query($conn, $sql)){
    $users = array();
    while($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)){
        $users[] = $row;
    }
}
// var_dump($users);
foreach($users as $user){
    echo $user["usuario"]."<br/>";
    echo $user["email"]."<br/>";
}
?>