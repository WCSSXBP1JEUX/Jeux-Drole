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

	<div class="container beige">


		<h1 class="col-lg-offset-4 col-6">Event à venir</h1>



		<figure class="row">

		<img class="col-md-4" src="Images/picture_game.jpg">

		<figcaption class="col-md-7">
		<p>Nom de l’event : Soirée Catane</p>
		<p>Date : samedi 15 Mars 19H30</p>
		<p>Lieu : 34 rue des colons - 67404 KAHFSHEIM</p>
		<p>Nom de l’organisateur : Pedro Vasquez</p>
		<p>Participant max : 6</p>
		<p>Description de l’event : Salut! j’organise une petite soirée pour jouer à Colon de Catane avec l’extension marins et les extensions 5 / 6 joueurs du jeu de base et de marins....</p>
		<a href="page2.php" class="btn btn-light form-control change">Info</a>
		</figcaption>

		</figure>


		<figure class="row">

		<img class="col-md-4 col-md-push-7" src="Images/picture_game.jpg">

		<figcaption class="col-md-7 col-md-pull-4">
		<p>Nom de l’event : Découverte JDR plenilunio</p>
		<p>Date : dimanche 16 Mars 14h00</p>
		<p>Lieu : 69 rue des archanges - 67404 KAHFSHEIM</p>
		<p>Nom de l’organisateur : Emilie Martin</p>
		<p>Participant max : 5</p>
		<p>Description de l’event : La fin du monde nous a frappé de plein fouet, les solaires et les lunaires se livrent une bataille sans merci à la surface de notre planète...</p>
		<a href="#" class="btn btn-light form-control change">Info</a>
		</figcaption>

		</figure>



		<figure class="row">

		<img class="col-md-4" src="Images/picture_game.jpg">

		<figcaption class="col-md-7">
		<p>Nom de l’event : Soirée Murder</p>
		<p>Date : samedi 30 Mars 19h00</p>
		<p>Lieu : 3 Impasse des bouchers - 67404 KAHFSHEIM</p>
		<p>Nom de l’organisateur : Agatha Poirot</p>
		<p>Participant max : 12</p> 
		<p>Description de l’event : 1922, la célèbre actrice Maya Toitovna organise une soirée mysticisme dans sa résidence de campagne. Malgré des invitations soigneusement fournies en main propre elle a reçu des menaces de mort...</p>
		<a href="#" class="btn btn-light form-control change">i
		Info</a>
		</figcaption>

		</figure>


	</div>

	<div class="container-fluid">	

		<footer>
			
			<?php include("footer.php") ?>

		</footer>

	</div>

</body>
</html>