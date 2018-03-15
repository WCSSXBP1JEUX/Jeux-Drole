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

	<div class="row container-fluid">

		<header>

	<?php include("navbar.php");   ?>

		</header>

	</div>

	<div class="container-fluid bg">
		<div class="container beige col-lg-offset-2 col-lg-8">

			<h1>Contact</h1>




			<form class="col-md-offset-2 well contact-bottom center-block" method="GET">

				<legend>Formulaire de contact </legend>

				<input type="name" name="user_name" placeholder="prénom">
				<input type="name" name="nom" placeholder="nom"><br>
				<input type="email" name="email" placeholder="email" class= "mail"><br>
				<select name="Motif" value="Motif">
						<option>Motif :</option>
						<option value="option1">Feedback</option>
						<option value="option2">Créer un évènement</option>
						<option value="option3">Devenir membre</option>
				</select><br>
				<textarea id="textarea" class="form-control" rows="5" placeholder="Message" ></textarea><br>


				<script type="text/javascript">
					function afficher() {
	    			alert("Votre message a bien était pris en compte.");
					}
				</script>

				<button type="submit" name="envoyer" value="envoyer" class="btn btn-light change" onclick="afficher()">Envoyer</button>

			</form>

		</div>
	</div>

	<div class=" row container-fluid">

		<footer>

			<?php include("footer.php"); ?>

		</footer>

	</div>

</body>
</html>
