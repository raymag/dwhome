<?php
// Carlos Magno
$n1 = 7.5;
$n2 = 5.5;
$n3 = 6.5;
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
