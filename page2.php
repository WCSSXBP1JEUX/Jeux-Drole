<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width = device-width, initial-scale=1">
	<title>Projet 1</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="projet.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<header class="row">
	
	<?php include("navbar.php");   ?>

		</header>

		<h1 class="col-lg-offset-4 col-6">Créer un événement</h1>
		

		<form>
			
			<legend>Formulaire création event :</legend>

			<input type="name" name="Prénom" placeholder="Prénom" autofocus="name"><input type="name" name="name" placeholder="Nom"><br>
			<input type="email" name="email" placeholder="email"><br>
			<input type="lieu" name="lieu" placeholder="Adresse"><br>
			<input type="lieu" name="lieu" placeholder="Complément adresse"><br>
			<label>Jour de l'événement :</label> <input type="date" name="mois"> <label>Heure de début</label> <input type="time" name="debut"> <label>Heure de fin</label> <input type="time" name=""><br>
			<label>Nb max de personnes : </label> <input type="number" name="nombre"><br>

			<select>
				<option>Catégorie :</option>
				<optgroup label="Jeux plateau">
				<option>Monopoly</option>
				<option>Dungeons And draagons</option>
				</optgroup>

				<optgroup label="lan">
					<option>Fortnite</option>
					<option>Pubg</option>
				</optgroup>
			</select><br>


			<textarea placeholder="Description de l'event" class="form-control"></textarea><br>


		</form>


		<button class="btn btn-primary">Créer</button>

		
		<footer>
			
	<?php include("footer.php"); ?>

		</footer>

</body>
</html>