 <!DOCTYPE html> 
 <html lang="pt-br"> 
 <head> 
 <meta charset="utf-8"/> 
 <meta name="author" content="Carlos Magno"/> 
 <title>funcoes_array3 array_keys</title> 
 <link rel="stylesheet" href="../css/padrao.css"/> 
 </head> 
 <body> 
 <?php   
 $user["nome"] = "Magno";
 $user["senha"] = "nuncanemvi";
 $user["email"] = "sla@nuncavi.com";

echo "<h3>Chaves do Array</h3><br>";

for($i=0;$i<count($user);$i++){
    echo array_keys($user)[$i]."<br>";
}
 
 ?> 
 </body> 
 </html>