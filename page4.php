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
	<div class=" row container-fluid">

		<header>

	<?php include("navbar.php");   ?>

		</header>

	</div>

	<div class="container-fluid bg">

		<div class="container beige col-lg-offset-2 col-lg-8">


			<h1>Event à venir</h1>



			<figure class="row">

			<img class="col-sm-offset-2 col-md-offset-0 col-md-4 center-block" src="Images/Colon_catane.jpg">

			<figcaption class="col-md-8">
			<p>Nom de l’event : Soirée Catane <br>
			Date : samedi 15 Mars 19H30 <br>
			Lieu : 34 rue des colons - 67404 KAHFSHEIM <br>
			Nom de l’organisateur : Pedro Vasquez <br>
			Participant max : 6 <br><br>
			Description de l’event : Salut! j’organise une petite soirée pour jouer à Colon de Catane avec l’extension marins et les extensions 5 / 6 joueurs du jeu de base et de marins....</p><br>
			<a href="page2.php" class="btn btn-light form-control change">Info</a><p><br></p>
			</figcaption>

			</figure>


			<figure class="row">

			<img class="col-sm-offset-2 col-md-offset-0 col-md-4 center-block col-md-push-8" src="Images/role-playing-game-2536016__340.jpg">

			<figcaption class="col-md-8 col-md-pull-4">
			<p>Nom de l’event : Découverte JDR plenilunio <br>
			Date : dimanche 16 Mars 14h00 <br>
			Lieu : 69 rue des archanges - 67404 KAHFSHEIM <br>
			Nom de l’organisateur : Emilie Martin <br>
			Participant max : 5 <br><br>
			Description de l’event : La fin du monde nous a frappé de plein fouet, les solaires et les lunaires se livrent une bataille sans merci à la surface de notre planète...</p><br>
			<a href="#" class="btn btn-light form-control change">Info</a><p><br></p>
			</figcaption>

			</figure>



			<figure class="row">

			<img class="col-sm-offset-2 col-md-offset-0 col-md-4 center-block" src="Images/sherlock-holmes-resize.png">

			<figcaption class="col-xs-12 col-sm-12 col-md-8">
			<p>Nom de l’event : Soirée Murder <br>
			Date : samedi 30 Mars 19h00 <br>
			Lieu : 3 Impasse des bouchers - 67404 KAHFSHEIM <br>
			Nom de l’organisateur : Agatha Poirot <br>
			Participant max : 12 <br> <br>
			Description de l’event : 1922, la célèbre actrice Maya Toitovna organise une soirée mysticisme dans sa résidence de campagne. Malgré des invitations soigneusement fournies en main propre elle a reçu des menaces de mort...</p><br>
			<a href="#" class="btn btn-light form-control change">Info</a><p><br></p>
			</figcaption>

			</figure>

		</div>
	</div>



	<div class="row container-fluid">

		<footer>

			<?php include("footer.php") ?>

		</footer>

	</div>

</body>
</html>
