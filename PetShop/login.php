<?php 
	require_once('dbinfo.inc.php');
	session_start();
 
echo <<<EOD
<!DOCTYPE html>
<html>
<head>
	<title>MnM Online Petshop - Best place to meet our best friends.</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
	<header>
		<a href="index.php"><img class="logo" src="media/header.png"/></a>
	</header>
		<nav>
			<ul>
				<li><a href="index.php">HOME</a></li>
				<li><a href="#">SHOP</a></li>
				<li><a href="#">INFO</a></li>
				<li><a href="feedback.php">FEEDBACK</a></li>
				<li><a href="account.php">ACCOUNT</a></li>
				<li><a href="#">CART</a></li>
				<input type="search" name="search-text" placeholder="Search a pet"/>
				<input type="button" name="search-button" value="Search"/>
			</ul>

		</nav><br>
	<div id="container">
		<div id="sidebar">
			<div class="category-head">
				<a href="#"><h2>ALL PETS</h2></a>
			</div>
			<div class="category-head">
				<a href="#"><h2>DOGS</h2></a>
			</div>
			<div class="category-head">
				<a href="#"><h2>CATS</h2></a>
			</div>
			<div class="category-head">
				<a href="#"><h2>REPTILES</h2></a>
			</div>
		</div>
		<div id="content">
			<form action="login.php" class="login-box" method="post">
				<h2>Welcome to MnM Online Pet Shop Login</h2><br/>
				<label>Username:</label><br/>
					<input type="text" name="username"/><br/>
				<label>Password:</label><br/>
					<input type="password" name="password"><br/>
				<input type="checkbox" name="rempass"/><span>  Remember Password</span><br/>
				<input type="submit" value="Login"/>
				<input type="reset" name="submit" value="Clear"/>
			</form>

EOD;
		if(!isset($_POST['username']) || !isset($_POST['password'])) {
			//No codes to run
		} else {
			$c = oci_pconnect(ORA_CON_UN,ORA_CON_PW,ORA_CON_DB);
			$s = oci_parse($c, 'SELECT admin_username FROM admin WHERE admin_username = :un_bv AND admin_password = :pw_bv');
			oci_bind_by_name($s, ":un_bv", $_POST['username']);
			oci_bind_by_name($s, ":pw_bv", $_POST['password']);
			oci_execute($s);
			$r = oci_fetch_array($s, OCI_ASSOC);
			if ($r) {
				$_SESSION['username'] = $_POST['username'];
				header("Location: account.php");
			}
			 else {
			 	echo "<p>Login failed. Invalid username/password</p>";
			 } 
			}
echo <<<EOD
		</div>
		<div id="ads">
			<img class="img-ads" src="media/ads.gif">
		</div>
	</div>

	<footer>
		<div class="footer-list">
			<ul>
				<li><i>ANIMAL CARE</i></li>
				<li><a href="#">Dogs</a></li>
				<li><a href="#">Cats</a></li>
				<li><a href="#">Reptiles</a></li>
			</ul>
			<ul>
				<li><i>CONTACT INFO</i></li>
				<li><a href="#">Contact Us</a></li>
				<li><a href="#">Feedbacks</a></li>
				<li><a href="#">Gallery</a></li>
			</ul>
			<ul>
				<li><i>PHYSICAL STORE</i></li>
				<li>Location: UE Tech Road,</li>
				<li>Samson Road, Caloocan City</li>
			</ul>
			<ul>
				<li><i>FOLLOW US</i></li>
				<li>MnM Online PetShop</li>
				
					<a href="https://www.fb.com"><img class="icon" src="media/footer-fb.png"></a>
					<a href="https://www.twitter.com"><img class="icon" src="media/footer-twitter.png"></a>
					<a href="https://www.instagram.com"><img class="icon" src="media/footer-insta.png"></a>
					<a href="https://www.google.com"><img class="icon" src="media/footer-google.png"></a>
				
			</ul>
			<p class="copyright">&copy; 2017 MnM Online PetShop. All Rights Reserved</p>
	</footer>


</body>
</html>
EOD;
?>