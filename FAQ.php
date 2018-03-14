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

			<h1>FAQ<h1>

        <h2>Comment faire pour s’inscrire à un événement ? </h2>
				<p>Sur la page <a href="page4.php" class="faq">Événements à venir</a>, vous avez accès à tous les événements disponibles prochainement. Lorsqu’un événement vous intéresse, il suffit de cliquer sur le bouton « info », situé en dessous de l’événement. Vous serez alors redirigé vers un formulaire d’inscription à l’événement. <br>
Pour s’inscrire, remplir le formulaire d’inscription à l’événement et cliquer sur s’inscrire.
</p>
        <h2>Est ce que je peux proposer un événement ? </h2>
        <p>Vous pouvez nous proposer des événements via le <a href="page3.php" class="faq">formulaire de contact</a>.
        </p>

        <h2>Comment faire pour annuler mon inscription à un événement ?</h2>
        <p>En cas d’imprévu, vous pouvez annuler votre inscription à un événement en nous envoyant un message via le <a href="page4.php" class="faq">formulaire de contact</a> au minimum 48H à l’avance.</p>

        <h2>Est ce que  je dois être membre de l’association pour participer à un événement ? </h2>
        <p>Nous proposons à la fois des événements tous publics, ainsi que des événements réservés aux adhérents. <br>
Cette information est disponible dans le descriptif de chaque événement sur la page <a href="page4.php" class="faq">Événements à venir</a></p>

        <h2>Les événements sont ils payant ? </h2>
        <p>Les tarifs sont précisés dans chaque événements, sur la page <a href="page4.php" class="faq">Événements à venir</a>.</p>

        <h2>Comment adhérer à l’association ? </h2>
        <p>Pour adhérer à l’association, vous pouvez nous contacter via le <a href="page4.php" class="faq">formulaire de contact</a>, en sélectionnant le motif Adhésion.
Suite à votre demande, on vous transmettra un bulletin d’adhésion.
Une fois le bulletin d’adhésion rempli, nous validerons votre adhésion.</p>






		</div>
	</div>

	<div class="row container-fluid">

		<footer>

	<?php include("footer.php"); ?>

		</footer>

	</div>




	<!-- <label>Jour de l'événement :</label> <input type="date" name="mois"> <label>Heure de début</label> <input type="time" name="debut"> <label>Heure de fin</label> <input type="time" name=""><br>
			<label>Nb max de personnes : </label> <input type="number" name="nombre">-->

</body>
</html>
