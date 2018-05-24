<!DOCTYPE html>
<html><head>
  <meta name="author" content="Carlos Magno"/>
  <link rel="stylesheet" href="../css/padrao.css"/>
<title>q12</title>
</head>
<body>
<fieldset>
<legend>Data do Sistema</legend>
<?php
echo "<p>".date("d/m/y")."</p>";
echo "<p>".date("d/M/y")."</p>";
echo "<p>".date("d/M/Y")."</p>";
echo "<p>".date("D, d/M/Y")."</p>";
echo "<p>".date("d/m/Y H:i:s")."</p>";
?>
</fieldset>
</body>
</html>