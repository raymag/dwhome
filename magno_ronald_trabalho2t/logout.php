<?php
session_start();
unset($_SESSION["id_usuario"]);
unset($_SESSION["email"]);
unset($_SESSION["nome"]);
header("Location:index.php");
?>