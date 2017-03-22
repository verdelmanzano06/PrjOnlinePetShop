<?php 
	require("includes/dbinfo.inc.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>M&M - Customer Login</title>
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
					<li><a href="index.php">Home</a></li>
				
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
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Account Page</a></li>
							<li><a href="logout.php">Logout</a></li>
						</ul>
					</li>
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
		<div class="row">
			<div class="col-md-2">
				<?php /* The Category Sidebar */ include("includes/sidebar.php"); ?>
			</div>

<!--START OF LOGIN CODE-->
	<div class="col-md-8">
		<div class="panel panel-default">
			<div class="panel-body">
				<ol class="breadcrumb">
							<li><a href="index.php">Home</a></li>
							<li class="disabled">Customer Section</li>
							<li class="active">Login</li>						
						</ol>
				<div class="panel-header">
					<h2><small>Login to M&M PetShop</small></h2>
				</div><br/>
				<div class="alert alert-info">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times</a>Don't have an account? Register <a href="registration.php">here</a>
				</div>
				<form role="form" method="post" action="login.php">
					<div class="input-group input-group-lg">
			 			 <span class="input-group-addon" id="sizing-addon1">@</span>
			  			<input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon1" name="cust_user" required>
					</div><br/>			
					<div class="input-group input-group-lg">
			 			 <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-lock"></span></span>
			  			<input type="password" class="form-control" placeholder="Password" aria-describedby="sizing-addon1" name="cust_pass" required>
					</div><br/>		
					<div class="input-group input-group-lg">
			  			<button type="submit" class="form-control btn btn-success" name="submit">Login</button>
					</div><br/>		
				</form>
			</div>
		</div>

		<?php 
			if(!isset($_POST['cust_user']) || !isset($_POST['cust_pass'])) {
					//No codes to run
				} else {
					$c = oci_pconnect(ORA_CON_UN,ORA_CON_PW,ORA_CON_DB);
					$s = oci_parse($c, 'SELECT cust_user FROM customer WHERE cust_user = :cust_user_bv AND cust_pass = :cust_pass_bv');
					oci_bind_by_name($s, ":cust_user_bv", $_POST['cust_user']);
					oci_bind_by_name($s, ":cust_pass_bv", $_POST['cust_pass']);
					oci_execute($s);
					$r = oci_fetch_array($s, OCI_ASSOC);

					if ($r) {
						$_SESSION['cust_user'] = $_POST['cust_user'];
							echo "<script>alert('You have been logged in!')</script>";
							echo "<script>window.open('index.php','_self')</script>";
					}
					 else {
					 	echo "<script>alert('Invalid Username or Password!')</script>";
					 	oci_close($c);

					 } 

				}
		?>
</div>
<!--END OF LOGIN CODE-->


		<?php /* Ads Section */ include("includes/ads.php"); ?>
		
	</div>	
</div>
		<?php /* Page Footer */ include("includes/footer.php"); ?>

		<?php /* Modal contact Form */ include("includes/contact_form.php"); ?>

</body>
</html>