<DOCTYPE html>

<html>

	<head>
		
		<title>Inserer nom du sondage</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="style.css" />
	
	</head>

	<body>
		
		<p>Nom de votre sondage</p>
		
		<form action="resultats.php" method="post">

			<input type="Checkbox" name="R1"> <?php echo $_POST['1'] ?>
			<input type="Checkbox" name="R2"> <?php echo $_POST['2'] ?>
			<input type="Checkbox" name="R3"> <?php echo $_POST['3'] ?>

		</form>

	</body>

</html>