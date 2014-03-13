<!DOCTYPE html>
<html>
	<head>
		<title>Des sondages, des sondages et encore des sondages...</title>
		<meta charset='utf-8' />
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>

	<body>
		<form action="sondage.php" method ="post">
			<h1><input type="text" name "nomDuSondage" placeholder="Nom du sondage" class="titre"></h1>
			<ul>

				<li>
  					<input type="text" name="1" placeholder='1er élément'class="entree">
				</li>
				<li>
  					<input type="text" name="2" placeholder='2nd élément' class="entree">
				</li>
  					<input type="text" name="3" placeholder='3ème élément' class="entree">
				</li>
				<li>
				<input type="submit" value="Envoyer">
				</li>
			</ul>
		</form>
	</body>