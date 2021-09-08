 <?php include('include/navbar.php'); ?>
 <?php include('include/header.php'); ?>
 <style type="text/css">
 
 /* Conatct start */

 .header-title
 {
 	text-align: center;
 	color:#00bfff;
 }

 #tip 
 {
 	display:none;  
 }

 .fadeIn
 {
 	animation-duration: 3s;
 }

 .form-control
 {
 	border-radius:0px;
 	border:1px solid #EDEDED;
 }

 .form-control:focus
 {
 	border:1px solid #00bfff;
 }

 .textarea-contact
 {
 	resize:none; 
 }

 .btn-send
 {
 	border-radius: 0px;
 	border:1px solid #00bfff;
 	background:#00bfff;
 	color:#fff; 
 }

 .btn-send:hover
 {
 	border:1px solid #00bfff;
 	background:#fff;
 	color:#00bfff;
 	transition:background 0.5s;   
 }

 .second-portion
 {
 	margin-top:50px; 
 }

 @import "//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css";
 @import "http://fonts.googleapis.com/css?family=Roboto:400,500";

 .box > .icon { text-align: center; position: relative; }
 .box > .icon > .image { position: relative; z-index: 2; margin: auto; width: 88px; height: 88px; border: 8px solid white; line-height: 88px; border-radius: 50%; background: #00bfff; vertical-align: middle; }
 .box > .icon:hover > .image { background: #333; }
 .box > .icon > .image > i { font-size: 36px !important; color: #fff !important; }
 .box > .icon:hover > .image > i { color: white !important; }
 .box > .icon > .info { margin-top: -24px; background: rgba(0, 0, 0, 0.04); border: 1px solid #e0e0e0; padding: 15px 0 10px 0; min-height:163px;}
 .box > .icon:hover > .info { background: rgba(0, 0, 0, 0.04); border-color: #e0e0e0; color: white; }
 .box > .icon > .info > h3.title { font-family: "Robot",sans-serif !important; font-size: 16px; color: #222; font-weight: 700; }
 .box > .icon > .info > p { font-family: "Robot",sans-serif !important; font-size: 13px; color: #666; line-height: 1.5em; margin: 20px;}
 .box > .icon:hover > .info > h3.title, .box > .icon:hover > .info > p, .box > .icon:hover > .info > .more > a { color: #222; }
 .box > .icon > .info > .more a { font-family: "Robot",sans-serif !important; font-size: 12px; color: #222; line-height: 12px; text-transform: uppercase; text-decoration: none; }
 .box > .icon:hover > .info > .more > a { color: #fff; padding: 6px 8px; background-color: #63B76C; }
 .box .space { height: 30px; }

 @media only screen and (max-width: 768px)
 {
 	.contact-form
 	{
 		margin-top:25px; 
 	}

 	.btn-send
 	{
 		width: 100%;
 		padding:10px; 
 	}

 	.second-portion
 	{
 		margin-top:25px; 
 	}
 }
 /* Conatct end */	
</style>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div>
				<h3 style="padding-top: 10px">Contact Us </h3>
				<br>
				<div class="col-sm-12" id="parent">
					<div class="col-sm-6">
						<iframe width="100%" height="320px;" frameborder="0" style="border:0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.899068156425!2d90.37139331486104!3d23.750978394671364!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755bf4d6018f643%3A0x603d2d083289b4a3!2sDhanmondi%2032%20Road%20Bridge%2C%20Dhanmondi%20Bridge%2C%20Dhaka%201209!5e0!3m2!1sen!2sbd!4v1601208607164!5m2!1sen!2sbd" allowfullscreen></iframe>
					</div>

					<div class="col-sm-6">
						<form action="#" class="contact-form" method="post">

							<div class="form-group">
								<input type="text" class="form-control" id="name" name="nm" placeholder="Name" required="" autofocus="">
							</div>


							<div class="form-group form_left">
								<input type="email" class="form-control" id="email" name="em" placeholder="Email" required="">
							</div>

							<div class="form-group">
								<input type="text" class="form-control" id="phone" onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength="10" placeholder="Mobile No." required="">
							</div>
							<div class="form-group">
								<textarea class="form-control textarea-contact" rows="5" id="comment" name="FB" placeholder="Type Your Message/Feedback here..." required=""></textarea>
								<br>
								<button class="btn btn-default btn-send"> <span class="glyphicon glyphicon-send"></span> Send </button>
							</div>
						</form>
					</div>
				</div>
			</div>

			<div class="container second-portion">
				<div class="row">
					<!-- Boxes de Acoes -->
					<div class="col-xs-12 col-sm-6 col-lg-4">
						<div class="box">							
							<div class="icon">
								<div class="image"><i class="fa fa-envelope" aria-hidden="true"></i></div>
								<div class="info">
									<h3 class="title">MAIL & WEBSITE</h3>
									<p>
										<i class="fa fa-envelope" aria-hidden="true"></i> &nbsp gondhiyahardik6610@gmail.com
										<br>
										<br>
										<i class="fa fa-globe" aria-hidden="true"></i> &nbsp www.hardikgondhiya.com
									</p>

								</div>
							</div>
							<div class="space"></div>
						</div> 
					</div>

					<div class="col-xs-12 col-sm-6 col-lg-4">
						<div class="box">							
							<div class="icon">
								<div class="image"><i class="fa fa-mobile" aria-hidden="true"></i></div>
								<div class="info">
									<h3 class="title">CONTACT</h3>
									<p>
										<i class="fa fa-mobile" aria-hidden="true"></i> &nbsp (+91)-9624XXXXX
										<br>
										<br>
										<i class="fa fa-mobile" aria-hidden="true"></i> &nbsp  (+91)-756706XXXX
									</p>
								</div>
							</div>
							<div class="space"></div>
						</div> 
					</div>

					<div class="col-xs-12 col-sm-6 col-lg-4">
						<div class="box">							
							<div class="icon">
								<div class="image"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
								<div class="info">
									<h3 class="title">ADDRESS</h3>
									<p>
										<i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp 15/3 Junction Plot 
										"Shree Krishna Krupa", Rajkot - 360001.
									</p>
								</div>
							</div>
							<div class="space"></div>
						</div> 
					</div>		    
					<!-- /Boxes de Acoes -->

					<!--My Portfolio  dont Copy this -->

				</div>
			</div>
		</div>
	</div>
</div>
</div>
<?php include('include/footer.php'); ?>