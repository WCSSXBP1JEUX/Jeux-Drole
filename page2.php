<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width = device-width, initial-scale=1">
	<title>Projet 1</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="main.css">
	<link href="https://fonts.googleapis.com/css?family=Special+Elite" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Nanum+Gothic" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>


	<div class="container-fluid">

		<header class="row">
			<?php include("navbar.php");   ?>
		</header>
	</div>

	<div class="container-fluid bg">
		<div class="container beige col-lg-offset-2 col-lg-8">

			<h1 class="col-lg-offset-3 col-6">Inscription à l'événement</h1>


			<img class="col-md-offset-2" src="Images/Colon_catane_resized.jpg">

			<figcaption class="col-md-offset-2 well">
				<p>Id: #12345</p>
				<p>Nom de l'event : Soirée Catane</p>
				<p>Date et heure : Samedi 15 Mars 19h30</p>
				<p>Lieu : 34 rue des colons - 67404 KAHFSHEIM</p>
				<p>Nom de l'organisateur : Pedro Vasquez</p>
				<p>Mail de l'organisateur : monmail@gmail.com</p>
				<p>Max de participant : 6</p>
				<p>Descriptif de l'event: Salut! j’organise une petite soirée pour jouer à Colon de Catane avec l’extension marins et les extensions 5 / 6 joueurs du jeu de base et de marins. Pour ceux qui le souhaiterons on pourra commander des pizzas. Chez moi on ne fume pas mais on pourra faire des pauses pour que les fumeurs puissent sortir s’en griller une ^^.
				N’hésitez pas me contacter pour vous inscrire ou avoir plus d’informations.</p>
			</figcaption>

			<form class=" col-md-offset-2 col-lg-5 well">

				<legend>Formulaire d'inscription à l'event :</legend>

				<input type="name" name="Prénom" placeholder="Prénom" autofocus="name"> <input type="name" name="name" placeholder="Nom"><br>
				<input type="email" name="email" placeholder="email" class="form-control">
				<input type="tel" pattern="+33923456789" name="number" placeholder="numéro de tel">
				<br>

				<script type="text/javascript">
					function afficher() {
		    		alert("Votre inscription a bien était prise en compte *Alea Jacta Est*");
					}
				</script>

				<button type="submit" name="envoyer" value="envoyer" class="btn btn-light change" onclick="afficher()">S'inscrire</button>


			</form>

		</div>
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
