

<div class="navbar navbar-default">

	<a class="navbar-brand"><span>Jeux Drôles</span></a>

	<div class="hidden-xs">
	<ul class="nav navbar-nav">
	    <li<?php if($_SERVER['PHP_SELF']=="/page1.php")   { echo " class=\"active\""; } ?>><a href="page1.php?page=page1.php">Home</a></li>
	    <li<?php if($_SERVER['PHP_SELF']=="/page4.php")   { echo " class=\"active\""; } ?>><a href="page4.php?page=page4.php">Evénements à venir</a></li>
	    <li<?php if($_SERVER['PHP_SELF']=="/page3.php")	  { echo " class=\"active\""; } ?>><a href="page3.php?page=page3.php">Contact</a></li>
	</ul>
	</div>

	<div class="visible-xs navbar-form">
	<div class="dropdown">
	  <button class="btn btn-light dropdown-toggle" type="button" data-toggle="dropdown">
	  <span class="glyphicon glyphicon-menu-hamburger"></span></button>


	<ul class="dropdown-menu pull-right">
	    <li><a href="page1.php">Home</a></li>
	    <li><a href="page4.php">Event à venir</a></li>
	    <li><a href="page3.php">Contact</a></li>
  	</ul>
</div>
</div>

	<div class="hidden-xs">
	<form class="navbar-form">

	</form>
	</div>

</div>


</div>
