<?php 
	if (isset($_SESSION['cust_user'])) {
		header("Location: myaccount.php");
	}


 ?>
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
				<form role="form" method="post">
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
