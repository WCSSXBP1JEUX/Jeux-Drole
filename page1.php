<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
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
		<div class="container beige col-lg-offset-2 col-lg-8" >
			<div id="carousel-generic" class="carousel slide" data-ride="carousel">
				  <!-- Indicators -->
				  <ol class="carousel-indicators">
				    <li data-target="#carousel-generic" data-slide-to="0" class="active"></li>
				    <li data-target="#carousel-generic" data-slide-to="1"></li>
				    <li data-target="#carousel-generic" data-slide-to="2"></li>
				  </ol>

			  <!-- Wrapper for slides -->
			     <div class="carousel-inner">
			       <div class="item active">
			         <img src="Images/board-game-529586_1920.jpg" alt="...">
			         <div class="carousel-caption">
			           <h3>Heading</h3>
			         </div>
			       </div>
			       <div class="item">
			         <img src="Images/dédéd.jpg" alt="...">
			         <div class="carousel-caption	">
			           <h3>Heading</h3>
			         </div>
			       </div>
						 <div class="item">
			         <img src="Images/game-2285322_960_720.jpg" alt="...">
			         <div class="carousel-caption">
			           <h3>Heading</h3>
			         </div>
			       </div>

			     </div>

			  <!-- Controls -->
			  <a class="left carousel-control" href="#carousel-generic" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left"></span>
			  </a>
			  <a class="right carousel-control" href="#carousel-generic" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right"></span>
			  </a>
			</div>

			<!-- <h1 class="col-lg-offset-4">Jeux Drôle </h1>  -->
			<div class="hidden-xs">
				<img src="Images/Titrerecolore.png" alt="Title" class="img-responsive center-block"/>
			</div>
			<p>Vous êtes amateur de jeux de carte, de jeux de plateau ou encore de jeux de rôle mais il vous est difficile de convertir votre entourage ou de réunir suffisamment de monde autour d'un table et rendre votre jeu vraiment intéressant. Ne cherchez plus, vous êtes au bon endroit.<br> <br />

			Jeux Drôle réunis un communauté de joueurs actifs organisant et participant régulièrement à des événements en tout genre (thématiques sur un jeu, découverte de plusieurs jeux, jeux de rôle one-shot/campagne, soirée Murder).<br> <br>

			Vous pouvez dès maintenant consulter les événements à venir et entrer en contact avec les organisateurs pour vous inscrire ou leur demander des informations complémentaires. De nouveau événements sont organisée régulièrement donc n’hésitez pas à passer de temps en temps par ici afin de rester informé des actualités proches de chez vous.<br>
			</p>


		</div>
	</div>

	<div class="row container-fluid">


		<footer>

			<?php include("footer.php") ?>

		</footer>


	</div>


</body>
</html>
