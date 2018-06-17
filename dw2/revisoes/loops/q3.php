<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Questão 3</title>
  </head>
  <body>
<table border="2">
  <tr>
    <th colspan="2"> Sequência Fibonacci</th>
  </tr>
<?php
$first = 0;
$second = 1;
echo "<tr><td>$second</td></tr>";
for($n=1;$n<=50;$n++){
  $third = $first+$second;
  $first = $second;
  $second = $third;
  echo "<tr><td>$second</td></tr>";
}
 ?>
</table>
  </body>
</html>
