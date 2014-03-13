<DOCTYPE html>

<html>

	<head>
		
		<title>Inserer nom du sondage</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="style.css" />
	
	</head>

	<body>
		
		<?php echo $_POST['titre'] ?>
		
		<form action="resultats.php" method="post">

			<input type="Checkbox" name="R1"> <?php echo $_POST['1'] ?>
			<input type="Checkbox" name="R2"> <?php echo $_POST['2'] ?>
			<input type="Checkbox" name="R3"> <?php echo $_POST['3'] ?>
			<button>Envoyer</button>
		</form>

	</body>

</html>