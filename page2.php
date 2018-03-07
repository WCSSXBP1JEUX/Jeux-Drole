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


	<div class="container-fluid">
		
		<header class="row">
	
	<?php include("navbar.php");   ?>

		</header>
	</div>

	<div class="container">

		<h1 class="col-lg-offset-4 col-6">Inscription à l'événement</h1>


		<figure>
			<img class="col-md-offset-2" src="Images/resized1.jpg">
			<figcaption class=" well">
				<p>Id: #Jeu_Plateau</p>
				<p>Nom de l'event : Soirée jeu</p>
				<p>Date : Le 15/03/18</p>
				<p>Lieu : Chez moi</p>
				<p>Mail de l'organisateur : monmail@gmail.com</p>
				<p>Descriptif de l'event: Une soirée avec des jeux qu'est-ce que tu veux savoir de plus sérieux ?!</p>
			</figcaption>





		</figure>

		

		<form>
			
			<legend>Formulaire d'inscription à l'event :</legend>

			<input type="name" name="Prénom" placeholder="Prénom" autofocus="name"><input type="name" name="name" placeholder="Nom"><br>
			<input type="email" name="email" placeholder="email"><br>
			<br>

			<script type="text/javascript">
				function afficher() {
	    		alert("Votre inscription a bien était prise en compte *Alea Jacta Est*");
	}
			</script>

			<button type="submit" name="envoyer" value="envoyer" class="btn btn-primary" onclick="afficher()">S'inscrire</button>


		</form>

	</div>

	<div class="container-fluid">
		
		<footer>
			
	<?php include("footer.php"); ?>

		</footer>

	</div>




	<!-- <label>Jour de l'événement :</label> <input type="date" name="mois"> <label>Heure de début</label> <input type="time" name="debut"> <label>Heure de fin</label> <input type="time" name=""><br>
			<label>Nb max de personnes : </label> <input type="number" name="nombre">-->

</body>
</html>