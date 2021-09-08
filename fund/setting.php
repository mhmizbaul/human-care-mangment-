<?php include ('process/session.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="assets/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-colorpicker/css/colorpicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-daterangepicker/daterangepicker.css" />
      <!--right slidebar-->
      <link href="css/slidebars.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
	<link rel="shortcut icon" href="img/favicon.html">
    <title>SMS - teacher Dashboard</title>
  </head>

  <body>
  <section id="container">
      <!--Navbar start-->
		<?php include ('include/navbar.php'); ?>
      <!--Navbar end-->
      <!--sidebar start-->
		<?php include ('include/sidebar.php'); ?>
      <!--sidebar end-->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
			  <!-- CUSTOM CODE WILL GOES HERE  -->
			  <!-- CUSTOM CODE WILL GOES HERE  -->
			  <!-- CUSTOM CODE WILL GOES HERE  -->
			  
			  <div class="col-lg-6 col-xs-6 col md-6 col-md-offset-3">
                      <section class="panel">
                          <header class="panel-heading setting_clr font_white3 text-center">
                              Change Your Picture
                          </header>
                          <div class="panel-body font_black">
						  <?php 
                        if(isset($_GET['teacherid'])){
                        $userid = $_GET['teacherid'];
                        $sql = mysqli_query($con,"SELECT * FROM teacher WHERE u_id ='$userid'");
                        while ($row = mysqli_fetch_assoc($sql)) {
                        		$id = $row['u_id'];
                        		//$s = $row['schedule'];
                        		//$r = '0';
                        		//$t = '1';
                        ?>
                              <form  enctype="multipart/form-data" method="POST" role="form" action="">
                                  <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                      <label for="exampleInputFile">Upload Image Face</label>
                                      <input type="file" name="file">
                                      <p class="help-block">Input A Medium Size Photo</p>
                                  </div>
								
								  <div style="margin-top:42px;" class="form-group col-lg-6 col-md-6 col-xs-12">
									<button type="submit" name="submit" class="btn btn-info blue_btn">Submit</button>
								  </div>
                              </form>

                          </div>
                      </section>
                  </div>
			  
			  <!-- CUSTOM CODE WILL ENDS HERE  -->
			

          </section>
      </section>
      <!--main content end-->
	  
	  
      <!--footer start-->
		<?php include ('include/footer.php'); ?>
      <!--footer end-->
  </section>
    <!-- js placed at the end of the document so the pages load faster -->
     <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/jquery-3.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>

    <script src="js/jquery-ui-1.9.2.custom.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>

  <!--custom switch-->
  <script src="js/bootstrap-switch.js"></script>
  <!--custom tagsinput-->
  <script src="js/jquery.tagsinput.js"></script>
  <!--custom checkbox & radio-->
  <script type="text/javascript" src="js/ga.js"></script>

  <script type="text/javascript" src="assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="assets/bootstrap-daterangepicker/date.js"></script>
  <script type="text/javascript" src="assets/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script type="text/javascript" src="assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
  <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>

  <script type="text/javascript" src="assets/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
  <script src="js/respond.min.js" ></script>

  <!--right slidebar-->
  <script src="js/slidebars.min.js"></script>


  <!--common script for all pages-->
  <script src="js/common-scripts.js"></script>

  <!--script for this page-->
  <script src="js/form-component.js"></script>
  </body>
</html>
<?php 
     if(isset($_POST['submit']))
    {		
		if((($_FILES["file"]["type"]=="image/jpeg") || ($_FILES["file"]["type"]=="image/png") || ($_FILES["file"]["type"]=="image/gif"))&&($_FILES["file"]["size"] < 1048576)) {
		$filename = $_FILES['file']['name'];
		$file_basename = substr($filename, 0, strripos($filename, '.')); // get file name
		$file_ext = substr($filename, strripos($filename, '.')); // get file format
		$size = $_FILES['file']['size'];
		$type = $_FILES['file']['type'];
		$tmp_name = $_FILES['file']['tmp_name'];
		$error = $_FILES['file']['error'];
		$location = 'uploads/pro_pic/';	
		// Rename file
		$newfilename = substr(str_shuffle(md5($file_basename)), 0, 25) . $file_ext;
		if (move_uploaded_file($tmp_name, $location.$newfilename)) {
        $ins=mysqli_query($con,"UPDATE `teacher` SET
                          pro_pic = '$newfilename' WHERE u_id='$userid' ");
        if($ins)
        {
			$link="view_profile.php?teacherid=$userid";
							
							//header('Location:' . $link . '');
            echo "<script> alert(' Successfully Uploaded!!') </script>";
			echo "<script> window.open('$link','_self'); </script>";
		}
	}

else {
	$link1="setting.php?teacherid=$userid";
		 echo "<script> alert(' Failed!!') </script>";
			echo "<script> window.open('$link1','_self'); </script>";

 }}}}} ?>

