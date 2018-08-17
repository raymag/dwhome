<?php
	function conecta_mysql(){
		$host = "127.0.0.1";
		$user = "root";
		$passwd = "root";
		$bd = "magno_ronald";

		$conn = mysqli_connect($host, $user, $passwd, $bd);
		mysqli_set_charset($conn, "utf8");

		return $conn;
	}

?>
