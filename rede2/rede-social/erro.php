<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
<?php
if($_GET["er"]){
    switch ($_GET["er"]){
        case "1":
            echo "<p class='redhighlight'>Dados incorretos. 
            <a href='index.php'> Tentar novamente.</a></p>";
            break;
        case "2":
            echo "<p class='redhighlight'>É necessário estar logado para acessar esta página.
            <a href='index.php'>Fazer login.</a></p>";
            break;
    }
}
?>
</body>
</html>