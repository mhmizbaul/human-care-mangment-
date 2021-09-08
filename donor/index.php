<!DOCTYPE html>
<html lang="en">


<head>
   <?php include('include/css.php'); ?>
   <?php include('include/js.php'); ?>
    <title>Blood Donation Management System</title>
    <link rel="stylesheet" href="css/custom_teacher.css" type="text/css"/>
</head>

  <body class="login-body" style="background-color:#ccc;">
   <div class="container">
		<header>
 
			<div class="row">
			  <br>
			   <div class="col-md-7 pro_bg" style="margin-top:50px;">
				<img src="donation.jpg" style="width:100%">
				</div>
				<div class="col-md-5">
					<div class="row">
			   

				  <form class="form-signin pro_bg " method="POST" action="process/login_process.php">
					<h2 class="form-signin-heading navbar_color">Donor login</h2>
					<div class="login-wrap ">
						<input name="username" type="text" class="form-control font_black2" placeholder="Your Email" autofocus>
						<input name="password" type="password" class="form-control font_black2" placeholder="Password">
						<label class="checkbox font_black2">
							<input type="checkbox" value="remember-me"> Remember me
							<!--
							<span class="pull-right">
								<a data-toggle="modal" href="#myModal"> Forgot Password?</a>

							</span> -->
						</label>
						<button name="submit" class="btn btn-lg btn-login btn-block blue_btn" type="submit">Log In</button>
					</div>

					  <!-- Modal -->
					  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
						  <div class="modal-dialog">
							  <div class="modal-content">
								  <div class="modal-header">
									  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									  <h4 class="modal-title">Forgot Password ?</h4>
								  </div>
								  <div class="modal-body">
									  <p>Enter your e-mail address below to reset your password.</p>
									  <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

								  </div>
								  <div class="modal-footer">
									  <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
									  <button class="btn btn-success" type="button">Submit</button>
								  </div>
							  </div>
						  </div>
					  </div>
					  <!-- modal -->

				  </form>

				</div>
			 
			</div>
			 
			</div>
				
		</header> 
	</div>

    
</html>
