<?php 
	session_start();
	if (!isset($_SESSION['cust_user'])) {
		header("Location: checkout.php");
	}

	require("includes/dbinfo.inc.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>M&M - Customer's Account Section</title>
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
					<?php 
						if (!isset($_SESSION['cust_user'])) {
	    					echo "<li><a href='checkout.php''>Login/Register</a></li>";
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
							<li class="active">Account Page</li>						
						</ol>
				<div class="panel-header">
					<h1><small>My Account</small></h1>
				</div>
				<div></div>
				<div class="list-group">
					  	<a href="edit_account.php"><button type="button" class="list-group-item">Edit Account Details</button></a>
						<a href="change_password.php"><button type="button" class="list-group-item">Change Password</button></a>
						<a href="deactivate.php"><button type="button" class="list-group-item">Deactivate Account</button></a>
						<a href="logout.php"><button type="button" class="list-group-item">Logout</button></a>
				</div>
				<div></div>


				<h1><small>My Transactions</small></h1>
				<div class="list-group">
					  	<a href="myorder.php"><button type="button" class="list-group-item">My Order</button></a>
						<a href="orderhistory.php"><button type="button" class="list-group-item">View Order History</button></a>
				</div>
				
			</div>
		</div>
</div>
<!--END OF LOGIN CODE-->


			<?php /* Ads Section */ include("includes/ads.php"); ?>
		
	</div>	
</div>
		<?php /* Page Footer */ include("includes/footer.php"); ?>

		<?php /* Modal contact Form */ include("includes/contact_form.php"); ?>

</body>
</html>