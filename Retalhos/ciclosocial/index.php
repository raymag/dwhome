<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ciclo Social</title>
    <link rel="stylesheet" href="../css/padrao.css">
</head>
<body>
    <form action="" method="post">
    <fieldset>
    <legend>Procurar Pessoas</legend>
    <label>Nome: 
        <input list="namelist" name="nome" id="nameIn">
    </label><br>
    <datalist id="namelist"></datalist>
    <table id="tb"></table>
    </fieldset>
    <fieldset>
    <button id="addPerson">Adicionar Nova Pessoa</button>
    </fieldset>
    </form>
<script src="js/padrao.js"></script>
</body>
</html>