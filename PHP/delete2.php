<?php
	$servidor = "xampp";
	$usuari = "admin";
	$password = "";
	$db = "test";

	$codi = $_REQUEST['codi'];
	
	// Create connection
	$conn = new mysqli($servidor, $usuari, $password, $db);
	
	// Check connection
	if ($conn->connect_error) {
		die("Connexió KO: " . $conn->connect_error);
	} else {
			$sql = "DELETE FROM alumnes
					WHERE codi = " . $codi;

			if ($conn->query($sql) === TRUE) {
				echo "Registre eliminat amb èxit";
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}

		$conn->close();
	}
?>