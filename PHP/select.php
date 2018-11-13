<html>
	<head>
		<title>Prova PHP</title>
	</head>
	<body>
		<p>Els alumnes de 2n CFGM són:</p>
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
			} 
			else {

				$sql = "SELECT nom, llinatge1, llinatge2 FROM alumnes";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					// output data of each row
					echo "Nom\tLlinatge1\tLlinatge2<br>";
					while($rows = $result->fetch_assoc()) {
						echo $rows['nom'] . "\t" . $rows['llinatge1'] . "\t" . $rows['llinatge2'] . "<br/>";
					}
				} else {
					echo "0 registres";
				}
				$conn->close();
			}
		?>
	</body>
</html>