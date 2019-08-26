<?php
	function conecta_mysql(){
		$host = "127.0.0.1";
		$user = "root";
		$passwd = "root";
		$bd = "php01";

		$conn = mysqli_connect($host, $user, $passwd, $bd);
		mysqli_set_charset($conn, "utf8");

		return $conn;
	}

?>
