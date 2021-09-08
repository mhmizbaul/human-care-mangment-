<?php include ('process/session.php') ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include ('include/css.php'); ?>
        <link rel="shortcut icon" href="img/favicon.html">
        <title>SMS - Admin Dashboard</title>
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
                    <!-- CUSTOM CODE WILL GOES HERE  -->
                    <!-- page start-->
                    <div class="row">
                    <?php 
                        if(isset($_GET['adminid'])){
                        $userid = $_GET['adminid'];
                        $sql = mysqli_query($con,"SELECT * FROM admin WHERE u_id = '$userid'");
                        while ($row = mysqli_fetch_assoc($sql)) {
                        		$id = $row['u_id'];
                        		//$s = $row['schedule'];
                        		//$r = '0';
                        		//$t = '1';
                        ?>		
                    <aside class="profile-nav col-lg-3 ">
                        <section class="panel">
                            <div  class="user-heading round view_pro_color">
                                <a href="#">
                                <img src="uploads/pro_pic/<?php echo $row["pro_pic"]; ?>" alt="">
                                </a>
                                <h1><?php echo $row["fname"];?>&nbsp<?php echo $row['lname']; ?></h1>
                                <p>User ID : <?php echo $row["u_id"];?></p>
                            </div>
                            
                        </section>
                    </aside>
                    <aside class="profile-info col-lg-9">
                        <section class="panel">
                            <div class="col-md-12 bio-graph-heading view_pro_color">
                                <?php echo $row['details']; ?>
                            </div>
                            <div class="panel-body bio-graph-info pro_bg">
                                <h1 class="text-center bio_color">Bio Graph</h1><hr>
                                <div class="row font_black2 ">
                                    <div class="bio-row">
                                        <p><span class="font_black">First Name </span>: <?php echo $row['fname']; ?></p>
                                    </div>
                                    <div class="bio-row">
                                        <p><span class="font_black">Last Name </span>: <?php echo $row['lname']; ?></p>
                                    </div>
                                    <div class="bio-row">
                                        <p><span class="font_black">Mobile </span>: <?php echo $row['phone']; ?></p>
                                    </div>
                                    <div class="bio-row">
                                        <p><span class="font_black">Blood </span>: <?php echo $row['blood']; ?></p>
                                    </div>
                                    <div class="bio-row">
                                        <p><span class="font_black">Email</span>: <?php echo $row['email']; ?></p>
                                    </div>
                                    <div class="bio-row">
                                        <p><span class="font_black">Sex </span>: <?php echo $row['sex']; ?></p>
                                    </div>
                                    <div class="bio-row">
                                        <p><span class="font_black">Address </span>: <?php echo $row['address']; ?></p>
                                    </div>
                                    <div class="bio-row">
                                        <p><span class="font_black">Birth Date </span>: <?php echo $row['bdate']; ?></p>
                                    </div>
                                    <div class="bio-row">
                                        <p><span class="font_black">User Id </span>: <?php echo $row['u_id']; ?></p>
                                    </div>
                                    <div class="bio-row">
                                        <p><span class="font_black">Password </span>: <?php echo $row['password']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <a class="btn btn-success blue_btn" data-toggle="modal" href="#profile_edit<?php echo $row['u_id']; ?>">
                        Edit Profile
                        </a>
                    </aside>
                    <!-- page end-->
                    <!-- CUSTOM CODE WILL ENDS HERE  -->
                </section>
            </section>
            <!--main content end-->
            <div class="modal fade " id="profile_edit<?php echo $row['u_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header view_pro_color">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title text-center">Edit Profile</h4>
                        </div>
                        <form method="post" action="">
                            <div class="modal-body font_black2">
                                <h4 style="color:red;"><b>NB: </b>If any form field don't need to change,keep it blank </h4>
                                <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                    <label for="exampleInput">First Name</label>
                                    <input type="text" class="form-control" name="fname" value="<?php echo $row['fname']; ?>" placeholder="<?php echo $row['fname']; ?>">
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                    <label for="exampleInput">Last Name</label>
                                    <input type="text" class="form-control" name="lname" value="<?php echo $row['lname']; ?>" placeholder="<?php echo $row['lname']; ?>">
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                    <label for="exampleInput">Password</label>
                                    <input type="text" class="form-control" name="password" value="<?php echo $row['password']; ?>" placeholder="<?php echo $row['password']; ?>">
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                    <label for="exampleInput">Address</label>
                                    <input type="text" class="form-control" name="address" value="<?php echo $row['address']; ?>" placeholder="<?php echo $row['address']; ?>">
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                    <label for="exampleInput">Phone No</label>
                                    <input type="text" class="form-control" name="phone" value="<?php echo $row['phone']; ?>" placeholder="<?php echo $row['phone']; ?>">
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                    <label for="exampleInput">Email</label>
                                    <input type="text" class="form-control" name="email" value="<?php echo $row['email']; ?>" placeholder="<?php echo $row['address']; ?>">
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                    <label for="exampleInput">Select Blood Group</label>
                                    <select name="blood" class="form-control m-bot15">
                                        <option value="<?php echo $row['blood']; ?>"><?php echo $row['blood']; ?></option>
                                        <option value="A+">A+</option>
                                        <option value="B+">B+</option>
                                        <option value="AB+">AB+</option>
                                        <option value="O+">O+</option>
                                        <option value="A-">A-</option>
                                        <option value="B-">B-</option>
                                        <option value="AB-">AB-</option>
                                        <option value="O-">O-</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                    <label for="exampleInput">Select Gender</label>
                                    <select name="sex" class="form-control m-bot15">
                                        <option value="<?php echo $row['sex']; ?>"><?php echo $row['sex']; ?></option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                    <label for="exampleInput">About You</label>
                                    <input type="text" class="form-control" value="<?php echo $row['details']; ?>" name="details" placeholder="Enter Something About">
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                    <label for="exampleInput">Add Birth Date</label>
                                    <!-- <input name="bdate" type="text" value="<?php echo $row['bdate']; ?>" placeholder="<?php echo $row['bdate']; ?>" data-mask="99/99/9999" class="form-control"> -->
                                    <input type="date" value="<?php echo date('Y-m-d',strtotime($row['bdate'])) ?>" name="bdate" class="form-control" >
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button data-dismiss="modal" class="btn  red_btn" type="button">Close</button>
                                <button class="btn btn-success blue_btn" name="edit" type="submit">Save changes</button>
                            </div>
                        </form>
                        <?php
                            if (isset($_POST['edit'])){
                            	
                            	$fname = $_POST['fname'];
                            	$lname = $_POST['lname'];
                            	$password = $_POST['password'];
                            	$address = $_POST['address'];
                            	$details = $_POST['details'];
                            	$bdate = $_POST['bdate'];
                            	$phone = $_POST['phone'];
                            	$email = $_POST['email'];
                            	$blood = $_POST['blood'];
                            	$sex = $_POST['sex'];
                            	
                            	$q = mysqli_query($con,"UPDATE admin SET fname = '$fname', lname = '$lname', email = '$email', 
                            			phone = '$phone', password = '$password', address= '$address', blood = '$blood', sex = '$sex', 
                            			details= '$details', bdate= '$bdate' WHERE u_id = '$userid' ");
                                echo "<script> alert('Information added successfully!!'); </script>";
                            	$link="view_profile.php?adminid=$userid";
                            	echo "<script> window.open('$link','_self'); </script>";
                            } }}
                            ?>
                    </div>
                </div>
            </div>
            <!--footer start-->
            <?php include ('include/footer.php'); ?>
            <!--footer end-->
        </section>
        <!-- js placed at the end of the document so the pages load faster -->
        <?php include ('include/js.php'); ?>
    </body>
</html>