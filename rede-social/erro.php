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
        case "wrongdata":
            echo "<p class='redhighlight'>Dados incorretos.</p>";
            break;
    }
}
?>
</body>
</html>