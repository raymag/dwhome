<!DOCTYPE html>
<!-- Carlos Magno -->
<!-- Exemplo sobre o uso de formularios em php -->
<html>
  <head>
    <meta charset="utf-8">
    <title>Formulário com PHP</title>
  </head>
  <body>
    <form action="recebi_do_form.php" method="POST">
      <fieldset><center>
        <p>
          <label>Nome: <input type="text" name="nome"/></label>
        </p>
        <p>
          <label>Idade: <input type="text" name="idade"/></label>
        </p>
        <input type="submit" value="Cadastrar">
        <input type="reset" value="Cancelar">
      </center></fieldset>
    </form>
  </body>
</html>
