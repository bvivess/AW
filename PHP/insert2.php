<?php
	$servidor = "xampp";
	$usuari = "admin";
	$password = "";
	$db = "test";

	$nom = $_REQUEST['nom'];
	$llinatge1 = $_REQUEST['llinatge1'];
	$llinatge2 = $_REQUEST['llinatge2'];

	
	// Create connection
	$conn = new mysqli($servidor, $usuari, $password, $db);
	
	// Check connection
	if ($conn->connect_error) {
		die("Connexió KO: " . $conn->connect_error);
	} else {
		$stmt = $conn->prepare("INSERT INTO alumnes (nom, llinatge1, llinatge2) VALUES (?, ?, ?)");
		$stmt->bind_param("sss", $nom, $llinatge1, $llinatge2);
		
		
		if ($stmt->execute() === TRUE) {
				echo "Registre creat amb èxit";
			} else {
				echo "Error: " . $stmt . "<br>" . $conn->error;
			}

		$stmt->close();
		$conn->close();
	}
?>