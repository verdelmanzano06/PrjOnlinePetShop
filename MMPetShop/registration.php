<?php 
	require("includes/dbinfo.inc.php");
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>M&M - Customer's Registration</title>
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
							<li><a href='#''>Account Page</a></li>
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
<!--START OF REGISTRATION CODE-->
			<div class="col-md-2">
				<?php /* The Category Sidebar */ include("includes/sidebar.php"); ?>
			</div>

			<div class="col-md-8">
				<ol class="breadcrumb">
					<li><a href="index.php">Home</a></li>
					<li class="disabled">Customer Section</li>
					<li class="active">Registration</li>						
				</ol>
					<div class="panel panel-default" style="background-color: #DADFE1;">
					
					<div class="panel-body">
					
						<div class="page-header">
							<h2><small>Customer Registration</small></h2>
						</div>
					</div>
					
					<form role="form" class="form-horizontal" method="post" action="registration.php">
					<div class="form-group col-lg-12">
						<label for="user-name" class="col-lg-3 control-label">Username:</label>
						<div class="col-lg-8">
							<input type="text" class="form-control" id="user-name" placeholder="Enter desired username" name="cust_user" required>
						</div>
					</div>
					<div class="form-group col-lg-12">
						<label for="user-password" class="col-lg-3 control-label">Password:</label>
						<div class="col-lg-8">
							<input type="password" class="form-control" id="user-password" placeholder="Enter desired password" name="cust_pass" required>
						</div>
					</div>
					<div class="form-group col-lg-12">
						<label for="conf-password" class="col-lg-3 control-label">Password Again:</label>
						<div class="col-lg-8">
							<input type="password" class="form-control" id="conf-password" placeholder="Enter password again" name="cust_pass1" required>
						</div>
					</div><hr/>
					<div class="form-group col-lg-12">
						<label for="user-email" class="col-lg-3 control-label">E-mail Address:</label>
						<div class="col-lg-8">
							<input type="email" class="form-control" id="user-email" placeholder="you@example.com" name="cust_email" required>
						</div>
					</div><hr/>
					<div class="form-group col-lg-12">
						<label for="user-fname" class="col-lg-3 control-label">First Name:</label>
						<div class="col-lg-8">
							<input type="text" class="form-control" id="user-fname" placeholder="Enter First Name" name="cust_fname" required>
						</div>
					</div>
					<div class="form-group col-lg-12">
						<label for="user-lname" class="col-lg-3 control-label">Last Name:</label>
						<div class="col-lg-8">
							<input type="text" class="form-control" id="user-lname" placeholder="Enter Last Name" name="cust_lname" required>
						</div>
					</div>
					<div class="form-group col-lg-12">
						<label for="user-gender" class="col-lg-3 control-label">Gender:</label>
						<div class="col-lg-8">
							<select name="cust_gender" id="user-gender" class="form-control" required>
								<option value="">(Please Select Gender)</option>
								<option value="Male" >Male</option>
								<option value="Female">Female</option>
							</select>
						</div>
					</div>
					<div class="form-group text-right">
						<div class="col-md-10">
							<button type="submit" class="btn btn-success" name="register">Register</button>
							<button type="reset" class="btn btn-info">Clear</button>
						</div>
					</div>
				</form>
				</div>
			</div>

		<?php
			if(!isset($_POST['register'])) {
				//No codes to run
			} else {
				$c = oci_pconnect(ORA_CON_UN,ORA_CON_PW,ORA_CON_DB);
				$s = oci_parse($c, 'INSERT INTO customer (cust_user, cust_pass, cust_email, cust_fname, cust_lname, cust_gender) VALUES (:cust_user, :cust_pass, :cust_email, :cust_fname, :cust_lname, :cust_gender)');

					oci_bind_by_name($s, ":cust_user", $_POST['cust_user']);
					oci_bind_by_name($s, ":cust_pass", $_POST['cust_pass']);
					oci_bind_by_name($s, ":cust_email", $_POST['cust_email']);
					oci_bind_by_name($s, ":cust_fname", $_POST['cust_fname']);
					oci_bind_by_name($s, ":cust_lname", $_POST['cust_lname']);
					oci_bind_by_name($s, ":cust_gender", $_POST['cust_gender']);

				$user_pass = $_POST['cust_pass'];
				$user_pass1 = $_POST['cust_pass1'];

				if ($user_pass !== $user_pass1) {
					echo "<script>alert('Password entered not the same!')</script>";
					die();
				}
	
				oci_execute($s);
					echo "<script>alert('Registration Success!')</script>";
					echo "<script>window.open('login.php','_self')</script>";
			} 
		?>
<!--END OF REGISTRATION CODE-->

			<?php /* Ads Section */ include("includes/ads.php"); ?>

		</div>
	</div>


		<?php /* Page Footer */ include("includes/footer.php"); ?>

		<?php /* Modal contact Form */ include("includes/contact_form.php"); ?>

</body>
</html>