<?php
SESSION_START();
unset( $_SESSION["codigo"] );
unset( $_SESSION["usuario"] );
unset( $_SESSION["email"] );
header("location:index.php");
?>