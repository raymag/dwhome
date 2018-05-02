<?php
// Carlos Magno
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$n3 = $_POST['n3'];
$media = ($n1+$n2+$n3)/3;
echo "Média das notas: $media pontos <br/>";
if ($media>7) {
  echo "Aluno aprovado.";
}
elseif ($media>=4 && $media<7) {
  echo "Prova final necessária.";
}
elseif ($media<4) {
  echo "Aluno reprovado.";
}
 ?>
