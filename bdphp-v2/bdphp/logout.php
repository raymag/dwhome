<?php
session_start();
UNSET($_SESSION["matricula"]);
UNSET($_SESSION["nome"]);
UNSET($_SESSION["cod_adm"]);
UNSET($_SESSION["senha_adm"]);
header("Location:index.php");
?>