<?php
	//session_start();
	//Parâmetros de conexão
	$servername = "200.18.128.51";
	$username = "anderson";
	$password = "anderson";
	$dbname = "IFMG";
	// Cria a conexão
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check a conexão
	if ($conn->connect_error) {
		die("Falha na conexão: " . $conn->connect_error);
	}
?>
