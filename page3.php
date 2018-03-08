<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
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

		<h1 class="col-lg-offset-5 col-6">Contact</h1>




		<form class="col-md-offset-2 well">
			
			<legend>Formulaire de contact </legend>

			<input type="name" name="prénom" placeholder="prénom">
			<input type="name" name="nom" placeholder="nom"><br>
			<input type="email" name="email" placeholder="email"><br>
			<select name="Motif" value="Motif">
					<option>Motif :</option>
					<option value="option1">Zetes tro nuleuh</option>
					<option value="option2">Vous êtes les meilleurs</option>
			</select><br>
			<textarea id="textarea" class="form-control" rows="5" placeholder="Message" ></textarea><br>


			<script type="text/javascript">
function afficher() {
    alert("Votre message a bien était pris en compte.");
}
</script>

<button type="submit" name="envoyer" value="envoyer" class="btn btn-primary" onclick="afficher()">Envoyer</button>

		</form>

		</div>

		<div class="container-fluid">

	<footer>
			
		<?php include("footer.php"); ?>

	</footer>	

	</div>	

</body>
</html>