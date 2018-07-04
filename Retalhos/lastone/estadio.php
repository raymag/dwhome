<?php
$clube = $_GET["clube"];
$conn = mysqli_connect("localhost", "root", "", "torcida", "8089");
mysqli_set_charset($conn, "UTF8");
$sql = 'SELECT estadios.apelido as apelido FROM 
    (SELECT * FROM clubes WHERE nome = "'.$clube.'")sla
     INNER JOIN estadios ON estadio_oficial = estadios.id';
$query = mysqli_query($conn, $sql);
if(mysqli_num_rows($query)>0){
$quey = mysqli_fetch_array($query);
echo $quey["apelido"];
}else{
    echo "null";
}
?>