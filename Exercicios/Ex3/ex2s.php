<?php
// Carlos Magno
$quantidade = $_POST['quantidade'];
if($quantidade<12){
  $total = $quantidade*1.2;
}
else{
  $total = $quantidade*1;
}
echo "O total por $quantidade maçãs será R$ $total";
 ?>
