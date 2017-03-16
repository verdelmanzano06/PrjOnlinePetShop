<!DOCTYPE html>
<html lang="en">
<head>
	<title>M&M PetShop - Home</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
			<nav class="navbar navbar-inverse">
		<div class="container">
			<!--logo -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavBar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="index.php" class="navbar-left"><img src="media/header.png"></a>
			</div>
			<!--menu-items -->
			<div class="collapse navbar-collapse" id="mainNavBar">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#">Home</a></li>
					<li><a href="#">Shop</a></li>
					<!--drop down menu -->
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Info <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#contact" data-toggle="modal">Contact</a></li>
							<li><a href="#">About Us</a></li>
							<li><a href="#">Gallery</a></li>
							<li><a href="#">Feedback</a></li>
						</ul>
					</li>
				</ul>

				<!--right align -->
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">Cart</a></li>
					<!--drop down menu -->
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Account Page</a></li>
							<li><a href="#">Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container">
		<div class="jumbotron">
			<h1><small>Welcome to M&M Petshop</small></h1>
			<p>M&M Petshop is online selling store of different animals like Reptiles, Dogs and Cats</p>
			<a class="btn btn-success" href="shop.php">Acquire one now</a>
			<a class="btn btn-info" href="registration.php">Register today</a>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<h3>Dog</h3>
				<p>The domestic dog (Canis lupus familiaris or Canis familiaris) is a member of genus Canis (canines) that forms part of the wolf-like canids, and is the most widely abundant carnivore. The dog and the extant gray wolf are sister taxa, with modern wolves not closely related to the wolves that were first domesticated. The dog was the first domesticated species and has been selectively bred over millennia for various behaviors, sensory capabilities, and physical attributes.</p>
				<a href="animal-care-dogs.php" class="btn btn-default">Read more...</a>
			</div>
			<div class="col-md-4">
				<h3>Cats</h3>
				<p>The domestic cat (Latin: Felis catus) is a small, typically furry, carnivorous mammal. They are often called house cats when kept as indoor pets or simply cats when there is no need to distinguish them from other felids and felines. Cats are often valued by humans for companionship and for their ability to hunt vermin. There are more than 70 cat breeds, though different associations proclaim different numbers according to their standards.</p>
				<a href="animal-care-cats.php" class="btn btn-default">Read more...</a>
			</div>
			<div class="col-md-4">
				<h3>Reptiles</h3>
				<p>Reptiles are tetrapod (four-limbed vertebrate) animals in the class Reptilia, comprising today's turtles, crocodilians, snakes, amphisbaenians, lizards, tuatara, and their extinct relatives. The study of these traditional reptile orders, historically combined with that of modern amphibians, is called herpetology.</p>
				<a href="animal-care-reptiles.php" class="btn btn-default">Read more...</a>
			</div>
		</div>
		<br/>
	</div>

	<div class="navbar navbar-default navbar-static-bottom">
		<div class="container">
			<p class="navbar-text pull-left">&copy 2017, M&M Online PetShop</p>
			<a class="navbar-btn btn btn-primary pull-right">Follow us on Facebook</a>
		</div>
	</div>

	<div class="modal fade" id="contact" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4>Contact our Store</h4>
				</div>
				<div class="modal-body">
					<p>M&M Online PetShop's physical store is located at (UE Tech, Samson Road, Caloocan City, Metro Manila, Philippines). For more information please contact our office phone: (02)864-2917 or fill this form. We make a sure a fast-response as soon as possible.</p>
					<p>Thank you.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>


</body>
</html>