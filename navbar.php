
<div class="col-md-12">

<div class="navbar navbar-default">

	<a class="navbar-brand"> Jeux Drôle</a>


	<div class="hidden-xs">
	<ul class="nav navbar-nav">
	    <li<?php if($_GET['page']=="page1.php")   { echo " class=\"active\""; } ?>><a href="page1.php?page=page1.php">Home</a></li>
	    <li<?php if($_GET['page']=="page2.php")   { echo " class=\"active\""; } ?>><a href="page2.php?page=page2.php">Créer un événement</a></li>
	    <li<?php if($_GET['page']=="page4.php")  { echo " class=\"active\""; } ?>><a href="page4.php?page=page4.php">Event à venir</a></li>
	    <li<?php if($_GET['page']=="page3.php"){ echo " class=\"active\""; } ?>><a href="page3.php?page=page3.php">Contact</a></li>
	</ul>
	</div>

	<div class="visible-xs navbar-form">
	 <div class="dropdown">
	  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
	  <span class="glyphicon glyphicon-menu-hamburger"></span></button>
	<ul class="dropdown-menu pull-right">
	    <li><a href="page1.php">Home</a></li>
	    <li><a href="page2.php">Inscription à un event</a></li>
	    <li><a href="page4.php">Event à venir</a></li>
	    <li><a href="page3.php">Contact</a></li>
  	</ul>
</div> 
</div>

	<div class="hidden-xs">
	<form class="navbar-form">

		<div class="input-group">
			<input type="text" class="form-control" placeholder="Search">
			<div class="input-group-btn">
				<button class="btn btn-default" type="submit">
					<i class="glyphicon glyphicon-search"></i>
				</button>
			</div>
		</div>
	</form>
	</div>

</div>


</div>




















