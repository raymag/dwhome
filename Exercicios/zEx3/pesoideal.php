<!DOCTYPE html>
<html>
<!-- Carlos Magno -->
  <head>
    <meta charset="utf-8">
    <title>Peso Ideal</title>
  </head>
  <body>
    <form action="pesoideals.php" method="post">
      <label> Sexo: <br>
        <label>Feminino <input type="radio" checked name="sexo" value="F"/></label><br>
        <label>Masculino <input type="radio" name="sexo" value="M"></label>
      </label><br>
      <label>Altura <input type="number" step="0.01" name="altura"/></label><br/>
      <input type="submit"/>
    </form>
  </body>
</html>
