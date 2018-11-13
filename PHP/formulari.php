<!DOCTYPE HTML>  
<html>
	<body>  
		<form name="formulari1" method="get" action="insert.php">
			Nom: <input type="text" name="nom" value="">
			Llinatge1: <input type="text" name="llinatge1" value="">
			Llinatge2: <input type="text" name="llinatge2" value="">
			<input type="submit" value="INSERTAR amb GET">
		</form>

		<form name="formulari2" method="post" action="insert.php">
			Nom: <input type="text" name="nom" value="">
			Llinatge1: <input type="text" name="llinatge1" value="">
			Llinatge2: <input type="text" name="llinatge2" value="">
			<input type="submit" value="INSERTAR amb POST">
		</form>

		<form name="formulari3" method="post" action="insert2.php">
			Nom: <input type="text" name="nom" value="">
			Llinatge1: <input type="text" name="llinatge1" value="">
			Llinatge2: <input type="text" name="llinatge2" value="">
			<input type="submit" value="INSERTAR2 amb POST">
		</form>
		
		<form name="formulari3" method="get" action="delete.php">
			Codi: <input type="text" name="codi" value="">
			<input type="submit" value="ELIMINAR amb GET">
		</form>
	</body>
</html>