<!DOCTYPE html>
<html>
<!-- Carlos Magno  -->
  <head>
    <meta charset="utf-8">
    <title>Peso Ideal</title>
  </head>
  <body>
    <form action="ex3s.php" method="post">
      <fieldset>
        <legend>Peso Ideal</legend>
      <label> Altura <input type="number" step="0.01" name="altura"></label><br>
      <fieldset>
        <legend>Sexo</legend>
        <label>Feminino<input type="radio" name="sexo" value="F"> </label><br>
        <label>Masculino<input type="radio" name="sexo" value="M"> </label>
      </fieldset>
      <input type="submit" value="Calcular"><input type="reset" value="Limpar">
    </fieldset>
    </form>
  </body>
</html>
