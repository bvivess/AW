<?php
	$servidor = "xampp";
	$usuari = "admin";
	$password = "";

	// Create connection
	$conn = new mysqli($servidor, $usuari, $password);

	// Check connection
	if ($conn->connect_error) {
		die("Connexió KO: " . $conn->connect_error);
	} else {
		echo "Connexió OK";
	}
?>