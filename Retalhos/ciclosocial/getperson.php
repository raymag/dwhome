<?php
include_once "inc/conexao.php";
$name = $_GET["nome"];
$conn = conectaDB();
$sql = "SELECT * FROM pessoas WHERE nome LIKE '$name%'";
$query = mysqli_query($conn, $sql);
if(mysqli_num_rows($query) == 1){
    while($row = mysqli_fetch_array($query)){
        echo "<tr>";
        echo "<td>".$row["nome"]."</td>";
        if(isset($row["data_nascimento"])){
            $years = $row["data_nascimento"];
            $years = explode("-", $years);
            if(intval($years[0])==0){
                echo "<td>"."desconhecida"."</td>";
            }else{
                $today = date("Y");
                $years = intval($today) - intval($years[0]);
                echo "<td>".$years."</td>";
            }
        }
        echo "<td>".$row["sexo"]."</td>";
        if(isset($row["ocupacao"])){
            echo "<td>".$row["ocupacao"]."</td>";
        }else{
            echo "<td>"."desconhecida"."</td>";
        }
        echo "</tr>";
    }
}
?>