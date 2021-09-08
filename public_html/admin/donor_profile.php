<link rel="stylesheet" href="css/custom_teacher.css" type="text/css"/>
<?php include ('process/session.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include ('include/css.php'); ?>
    <link rel="shortcut icon" href="img/favicon.html">
    <title>Blood Donation Management System</title>
</head>
<body style="background-color:white;">
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
                    if(isset($_GET['donorid'])){
                        $userid = $_GET['donorid'];
                        $sql = mysqli_query($con,"SELECT * FROM  blood_donation WHERE id = '$userid'");
                        while ($row = mysqli_fetch_assoc($sql)) {
                          $id = $row['id'];
                        		//$s = $row['schedule'];
                        		//$r = '0';
                        		//$t = '1';
                          ?>		
                          <aside class="profile-nav col-lg-3">
                            <section class="panel ">
                                <div class="user-heading round view_pro_color5">
                               <!--  <a href="#">
                                <img src="uploads/pro_pic/<?php //echo $row["pro_pic"]; ?>" alt="">
                            </a> -->
                            <h1><?php echo $row["name"];?></h1>
                            <p>Donor ID : <?php echo $row["id"];?></p>
                        </div>

                    </section>
                </aside>
                <aside class="profile-info col-lg-9">
                    <section class="panel">
                        <div class="panel-body bio-graph-info pro_bg2 ">
                            <h1 class="text-center font_blue_20 bold_font">Bio Graph</h1><hr>
                            <div class="row font_black2">
                                <div class="bio-row">
                                    <p><span class="bold_font">Name </span>: <?php echo $row['name']; ?></p>
                                </div>
                                <div class="bio-row">
                                    <p><span class="bold_font">Mobile </span>: <?php echo $row['mobile']; ?></p>
                                </div>
                                <div class="bio-row">
                                    <p><span class="bold_font">Blood </span>: <?php echo $row['blood']; ?></p>
                                </div>
                                <div class="bio-row">
                                    <p><span class="bold_font">Email</span>: <?php echo $row['email']; ?></p>
                                </div>
                                <div class="bio-row">
                                    <p><span class="bold_font">Gender </span>: <?php echo $row['gender']; ?></p>
                                </div>
                                <div class="bio-row">
                                    <p><span class="bold_font">Present Address </span>: <?php echo $row['present_address']; ?></p>
                                </div>
                                <div class="bio-row">
                                    <p><span class="bold_font">Permanent Address </span>: <?php echo $row['permanet_address']; ?></p>
                                </div>

                                <div class="bio-row">
                                    <p><span class="bold_font">User Id </span>: <?php echo $row['id']; ?></p>
                                </div>
                                <div class="bio-row">
                                    <p><span class="bold_font">Password </span>: <?php echo $row['password']; ?></p>
                                </div>
                            </div>
                        </div>
                    </section>
                    <a class="btn btn-success blue_btn" data-toggle="modal" href="#profile_edit<?php echo $row['id']; ?>">
                        Edit Profile
                    </a>
                </aside>
                <!-- page end-->
                <!-- CUSTOM CODE WILL ENDS HERE  -->
            </section>
        </section>
        <!--main content end-->
        <div class="modal fade " id="profile_edit<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header view_pro_color3">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title text-center">Edit Profile</h4>
                    </div>
                    <form method="post" action="">
                        <div class="modal-body font_black">
                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                <label for="exampleInput">Name</label>
                                <input type="text" class="form-control font_black2" name="name" value="<?php echo $row['name']; ?>">
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                <label for="exampleInput">Password</label>
                                <input type="text" class="form-control font_black2" name="password" value="<?php echo $row['password']; ?>">
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                <label for="exampleInput">Present Address</label>
                                <input type="text" class="form-control font_black2" name="present_address" value="<?php echo $row['present_address']; ?>">
                            </div>

                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                <label for="exampleInput">Permanent Address</label>
                                <input type="text" class="form-control font_black2" name="permanet_address" value="<?php echo $row['permanet_address']; ?>">
                            </div>



                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                <label for="exampleInput">Phone No</label>
                                <input type="text" class="form-control font_black2" name="phone" value="<?php echo $row['mobile']; ?>">
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                <label for="exampleInput">Email</label>
                                <input type="text" class="form-control font_black2" name="email" value="<?php echo $row['email']; ?>" >
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                <label for="exampleInput">Select Blood Group</label>
                                <select name="blood" class="form-control m-bot15 font_black2">
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
                                <select name="gender" class="form-control m-bot15 font_black2">
                                    <option value="<?php echo $row['gender']; ?>"><?php echo $row['gender']; ?></option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                <label for="exampleInput">Age</label>
                                <input type="text" class="form-control font_black2" value="<?php echo $row['age']; ?>" name="age">
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                <label for="exampleInput">Occupation</label>
                                <select name="occupation" class="form-control m-bot15 font_black2">
                                    <option value="<?php echo $row['occupation']; ?>"><?php echo $row['occupation']; ?></option>
                                    <option value="Student">Student</option>
                                    <option value="Service Holder">Service Holder</option>
                                    <option value="Dhanmondi">Others</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                <label for="exampleInput">How many times blood donation</label>
                                <input type="text" class="form-control font_black2" value="<?php echo $row['times_blood_donation']; ?>" name="times_blood_donation">
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                <label for="exampleInput">Last Date Blood Donation</label>
                                <input type="date" class="form-control font_black2" value="<?php echo $row['last_date_blood_donation']; ?>" name="last_date_blood_donation">
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                <label for="exampleInput">Area</label>
                                <select name="area" class="form-control m-bot15 font_black2">
                                    <option value="<?php echo $row['area']; ?>"><?php echo $row['area']; ?></option>
                                    <option value="Mirpur">Mirpur</option>
                                    <option value="Uttara">Uttara</option>
                                    <option value="Dhanmondi">Dhanmondi</option>
                                    <option value="Gulshan">Gulshan</option>
                                    <option value="Banani">Banani</option>
                                    <option value="Mohakhali">Mohakhali</option>
                                    <option value="Narayangonj">Narayangonj</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                <label for="exampleInput">Are you life time blood donation?</label>
                             <p><label>Yes</label> <input type="radio" name="life_time" value="yes" 
                               <?php if ($row['life_time'] == 'yes') {echo ' checked ';} ?>">
                               &nbsp;&nbsp; <label>No</label> <input type="radio" name="life_time" value="no" 
                               <?php if ($row['life_time'] == 'no') {echo ' checked ';} ?>"></p> 
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button data-dismiss="modal" class="btn btn-default red_btn" type="button">Close</button>
                            <button class="btn btn-success blue_btn" name="edit" type="submit">Save changes</button>
                        </div>
                    </form>
                    <?php
                    if (isset($_POST['edit'])){
                      $name = $_POST['name'];
                      $password = $_POST['password'];
                      $present_address = $_POST['present_address'];
                      $permanet_address = $_POST['permanet_address'];
                      $mobile = $_POST['phone'];
                      $email = $_POST['email'];
                      $blood = $_POST['blood'];
                      $gender = $_POST['gender'];
                      $age = $_POST['age'];
                      $occupation = $_POST['occupation'];
                      $times_blood_donation = $_POST['times_blood_donation'];
                      $last_date_blood_donation = $_POST['last_date_blood_donation'];
                      $area = $_POST['area'];
                      $life_time = $_POST['life_time'];


                      $q = mysqli_query($con,"UPDATE blood_donation SET name = '$name', password = '$password', present_address = '$present_address', 
                         permanet_address = '$permanet_address', mobile = '$mobile', blood= '$blood', gender= '$gender', age = '$age', occupation = '$occupation', 
                         times_blood_donation= '$times_blood_donation', last_date_blood_donation= '$last_date_blood_donation', area= '$area', life_time= '$life_time' WHERE id = '$userid' ");
                      if ($q) {
                          $link="view_profile.php?donorid=$userid";
                        echo "<script> window.open('$link','_self');alert('Donor Information Update Successfully') </script>";
                      }
                        
                    

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