<?php
	session_start();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>M&M PetShop - Home</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- If computer has running through internet
		<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="custom-css/custom.css">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	-->
	
	<!-- If computer doesn't access internet -->
	    <link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="custom-css/custom.css">
	    <script src="bootstrap-3.3.7-dist/js/jquery.min.js"></script>
	    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</head>
<body style="background-color: #ECECEC;">
			<nav class="navbar navbar-inverse lewis-header">
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
					<li class="active"><a href="index.php">Home</a></li>
				
					<!--drop down menu -->
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Info <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#contact" data-toggle="modal">Contact</a></li>
							<li><a href="#">Feedbacks</a></li>
							<li><a href="#">About Us</a></li>
							<li><a href="#">Gallery</a></li>
						</ul>
					</li>

					<li><a href="#">Shop</a></li>

					<li><a href="#">Cart</a></li>

					<!--drop down menu -->
					<?php 
						if (!isset($_SESSION['cust_user'])) {
	    					//No codes
						 } else {
						 	echo "<li class='dropdown'>
							<a href='#'' class='dropdown-toggle' data-toggle='dropdown'>My Account <span class='caret'></span></a>
							<ul class='dropdown-menu'>
							<li><a href='myaccount.php'>Account Page</a></li>
							<li><a href='logout.php'>Logout</a></li>
							</ul>
							</li>";
						 }
					 ?>
					 
				</ul>

				<!--right align -->
				<ul class="nav navbar-nav navbar-right">
					<li>
						<form role="search" class="navbar-form col-xs-12">
							<input type="search" class="form-control" placeholder="Search from shop"/>
							<input type="button" class="btn btn-danger" value="Search"/>
						</form>
					</li>
				</ul>

			</div>
		</div>
	</nav>

	<div class="container">
	<!--
	<div id="myCarousel" class="carousel slide" style="width: 60%; height: auto; margin: auto; border: 1px solid gray;">
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="2" class="active"></li>
		</ol>

		<div class="carousel-inner">
			<div class="item active">
				<img src="media/carousel/Desert.jpg" alt="Dog" class="img-responsive"/>
				<div class="carousel-caption">
					<h3>Dog</h3>
					<p>Lorem ipsum dolor site amet.</p>
				</div>
			</div>
			<div class="item">
				<img src="media/carousel/Lighthouse.jpg" alt="Cat" class="img-responsive"/>
				<div class="carousel-caption">
					<h3>Cat</h3>
					<p>Lorem ipsum dolor site amet.</p>
				</div>
			</div>
			<div class="item">
				<img src="media/carousel/Penguins.jpg" alt="Reptile" class="img-responsive"/>
				<div class="carousel-caption">
					<h3>Reptile</h3>
					<p>Lorem ipsum dolor site amet.</p>
				</div>
			</div>
		</div>

		<a class="carousel-control left" href="#myCarousel" data-slide="prev">
			<span class="icon-prev"></span>
		</a>
		<a class="carousel-control right" href="#myCarousel" data-slide="next">
			<span class="icon-next"></span>
		</a>
	</div>
	<br/>
	-->
	<div class="row">
		<div class="col-lg-7">
			<div class="jumbotron" style="background-color: #DADFE1;">
				<h1><small>Welcome to M&M Petshop</small></h1>
				<p>M&M Petshop is online selling store of different animals like Reptiles, Dogs and Cats</p>
				<a class="btn btn-success" href="shop.php">Get a pet now!</a> <strong>or</strong> 

				<?php  
					if(isset($_SESSION['cust_user'])) {
						echo "<a class='btn btn-info' href='myaccount.php'>Edit your account information</a>";
					} else {
						echo "<a class='btn btn-info' href='checkout.php'>Log in</a>";
					}
				?>
				

			</div>
		</div>
		<div class="col-lg-5">
			<div id="myCarousel" class="carousel slide" style="border: 1px solid gray;">
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="2" class="active"></li>
		</ol>

		<div class="carousel-inner">
			<div class="item active">
				<img src="media/carousel/Desert.jpg" alt="Dog" class="img-responsive"/>
				<div class="carousel-caption">
					<h3>Dog</h3>
					<p>Lorem ipsum dolor site amet.</p>
				</div>
			</div>
			<div class="item">
				<img src="media/carousel/Lighthouse.jpg" alt="Cat" class="img-responsive"/>
				<div class="carousel-caption">
					<h3>Cat</h3>
					<p>Lorem ipsum dolor site amet.</p>
				</div>
			</div>
			<div class="item">
				<img src="media/carousel/Penguins.jpg" alt="Reptile" class="img-responsive"/>
				<div class="carousel-caption">
					<h3>Reptile</h3>
					<p>Lorem ipsum dolor site amet.</p>
				</div>
			</div>
		</div>

		<a class="carousel-control left" href="#myCarousel" data-slide="prev">
			<span class="icon-prev"></span>
		</a>
		<a class="carousel-control right" href="#myCarousel" data-slide="next">
			<span class="icon-next"></span>
		</a>
	</div>
		</div>
	</div>
	<br/>
	<!--End of Div Container-->
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-4" style="border: 1px solid #DADFE1; border-radius: 6px; padding-bottom: 10px;">
				<h3><b>Dog</b></h3>
				<p>The domestic dog (Canis lupus familiaris or Canis familiaris) is a member of genus Canis (canines) that forms part of the wolf-like canids, and is the most widely abundant carnivore. The dog and the extant gray wolf are sister taxa, with modern wolves not closely related to the wolves that were first domesticated. The dog was the first domesticated species and has been selectively bred over millennia for various behaviors, sensory capabilities, and physical attributes.</p>
				<a href="animal-care-dogs.php" class="btn btn-default">Read more...</a>
			</div>
			<div class="col-md-4" style="border: 1px solid #DADFE1; border-radius: 6px; padding-bottom: 10px;">
				<h3><b>Cats</b></h3>
				<p>The domestic cat (Latin: Felis catus) is a small, typically furry, carnivorous mammal. They are often called house cats when kept as indoor pets or simply cats when there is no need to distinguish them from other felids and felines. Cats are often valued by humans for companionship and for their ability to hunt vermin. There are more than 70 cat breeds, though different associations proclaim different numbers according to their standards.</p>
				<a href="animal-care-cats.php" class="btn btn-default">Read more...</a>
			</div>
			<div class="col-md-4" style="border: 1px solid #DADFE1; border-radius: 6px; padding-bottom: 10px;">
				<h3><b>Reptiles</b></h3>
				<p>Reptiles are tetrapod (four-limbed vertebrate) animals in the class Reptilia, comprising today's turtles, crocodilians, snakes, amphisbaenians, lizards, tuatara, and their extinct relatives. The study of these traditional reptile orders, historically combined with that of modern amphibians, is called herpetology.</p>
				<a href="animal-care-reptiles.php" class="btn btn-default">Read more...</a>
			</div>
		</div>
		<br/>
	</div>

	

	<?php /* Page Footer */ include("includes/footer.php"); ?>

	<?php /* Modal contact Form */ include("includes/contact_form.php"); ?>

</body>
</html>