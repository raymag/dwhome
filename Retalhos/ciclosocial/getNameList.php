<?php
include_once "inc/conexao.php";
$name = $_GET["nome"];
$conn = conectaDB();
$sql = "SELECT * FROM pessoas WHERE nome LIKE '$name%'";
$query = mysqli_query($conn, $sql);
if(mysqli_num_rows($query)>0){
    $opt = "";
    while($row = mysqli_fetch_array($query)){
        $opt = $opt."<option value=\"".$row["nome"]."\"></option>";
    }
    echo $opt;
}
?>