<?php
	$servidor = "xampp";
	$usuari = "admin";
	$password = "";
	$db = "test";

	// Create connection
	$conn = new mysqli($servidor, $usuari, $password, $db);
	
	// Check connection
	if ($conn->connect_error) {
		die("Connexió KO: " . $conn->connect_error);
	} else {
		$i = 1;
		while ($i < 10){
			$i = $i + 1;
			
			$stmt = $conn->prepare("INSERT INTO alumnes (nom, llinatge1, llinatge2) VALUES (?, ?, ?)");
			$nom = "Nom".$i;
			$llinatge1 = "Llinatge".$i;
			$llinatge2 = "Llinatge".$i;
			$stmt->bind_param("sss", $nom, $llinatge1, $llinatge2);
			$stmt->execute();
		}

		echo "Registres creat amb èxit";

		$stmt->close();
		$conn->close();
	}
?>