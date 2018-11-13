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
			$sql = "INSERT INTO alumnes (nom, llinatge1, llinatge2) 
					VALUES(" . $nom . "," . $llinatge1 . ",". $llinatge2 . ")";

			if ($conn->query($sql) === TRUE) {
				echo "Registre creat amb èxit";
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}

		$conn->close();
	}
?>