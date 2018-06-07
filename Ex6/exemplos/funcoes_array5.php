 <!DOCTYPE html> 
 <html lang="pt-br"> 
 <head> <meta charset="utf-8"/> 
 <meta name="author" content="Carlos Magno"/> 
 <title>funcoes_array5 asort</title> 
 <link rel="stylesheet" href="../css/padrao.css"/> 
 </head> 
 <body> 
 <?php   
  $vetor[0] = "zebra";
  $vetor[1] = "cascavel";
  $vetor[2] = "abelha";
  var_dump($vetor);
  asort($vetor);
  var_dump($vetor);


 ?> 
 </body> 
 </html>