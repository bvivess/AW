<!DOCTYPE HTML>  
<html>
	<head>
		<style>
			.error {color: #FF0000;}
		</style>
	</head>
<body>  

	<?php
		// define variables and set to empty values
		$nomErr = $llinatge1Err = $llinatge2Err = "";
		$nom = $llinatge1 = $llinatge2 = "";

		// comprobar nom
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if (empty($_POST["nom"])) {
				$nomErr = "camp obligatori";
			}
			$nom = test_input($_POST["nom"]);
		}

		// comprobar llinatge1
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if (empty($_POST["llinatge1"])) {
				$llinatge1Err = "camp obligatori";
			}
			$llinatge1 = test_input($_POST["llinatge1"]);
		}
		
		
		function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
		return $data;
}
	?>

	<h2>PHP Form Validation Example</h2>
	<p><span class="error">* required field.</span></p>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
		Nom: <input type="text" name="nom" value="<?php echo $nom;?>">
			<span class="error">* <?php echo $nomErr;?></span>
		<br><br>
		Llinatge1: <input type="text" name="llinatge1" value="<?php echo $llinatge1;?>">
			<span class="error">* <?php echo $llinatge1Err;?></span>
		<br><br>
		Llinatge2: <input type="text" name="llinatge2" value="<?php echo $llinatge2;?>">
			<span class="error">* <?php echo $llinatge2Err;?></span>
		<br><br>
		<input type="submit" name="submit" value="Enviar">  
	</form>

	<?php
		echo "<h2>Your Input:</h2>";
		echo $nom;
		echo "<br>";
		echo $llinatge1;
		echo "<br>";
		echo $llinatge2;
	?>

</body>
</html>