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
	<div class="container">
		<header class="row">
	
	<?php include("navbar.php");   ?>

		</header>



		<h1 class="col-lg-offset-4 col-6">Contact</h1>




		<form class="well">
			
			<legend>Formulaire de contact </legend>

			<input type="name" name="prénom" placeholder="prénom">
			<input type="name" name="nom" placeholder="nom"><br>
			<input type="email" name="email" placeholder="email"><br>
			<select name="Motif" value="Motif">
					<option>Motif :</option>
					<option value="option1">Zetes tro nuleuh</option>
					<option value="option2">Vous êtes les meilleurs</option>
			</select><br>
			<textarea id="textarea" class="form-control" rows="5" placeholder="Message"></textarea><br>


			<script type="text/javascript">
function afficher() {
    alert("Message bien pris en compte");
}
</script>

<button type="submit" name="envoyer" value="envoyer" class="btn btn-primary" onclick="afficher()">Envoyer</button>



		</form>

		
	
	<footer>
			
		<?php include("footer.php"); ?>

	</footer>		

</body>
</html>