<link rel="stylesheet" href="css/custom_teacher.css" type="text/css"/>
<?php include ('process/session.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include ('include/css.php'); ?>
    <link rel="shortcut icon" href="img/favicon.html">
    <title>Human Care Management System</title>
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
                    if(isset($_GET['fundid'])){
                        $userid = $_GET['fundid'];
                        $sql = mysqli_query($con,"SELECT * FROM  evergreen_fund WHERE id = '$userid'");
                        while ($row = mysqli_fetch_assoc($sql)) {
                          $id = $row['id'];
                          $patientImage = $row['image'];
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
                            <p>Fund ID : <?php echo $row["id"];?></p>
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
                                    <p><span class="bold_font">Mobile </span>: <?php echo $row['patient_mobile_number']; ?></p>
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
                   <form enctype="multipart/form-data" method="POST" role="form" action="">
                        <div class="modal-body font_black">
                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                <label for="exampleInput">Name</label>
                                <input type="text" class="form-control font_black2" name="name" value="<?php echo $row['name']; ?>">
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                <label for="exampleInput">Disease Name</label>
                                <input type="text" class="form-control font_black2" name="disease_name" value="<?php echo $row['disease_name']; ?>">
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                <label for="exampleInput">Need Money</label>
                                <input type="text" class="form-control font_black2" name="need_money" value="<?php echo $row['need_money']; ?>">
                            </div>

                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                <label for="exampleInput">Age</label>
                                <input type="text" class="form-control font_black2" name="age" value="<?php echo $row['age']; ?>">
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                <label for="exampleInput">Hospital Name</label>
                                <input type="text" class="form-control font_black2" name="hospital_name" value="<?php echo $row['hospital_name']; ?>" >
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                <label for="exampleInput">Select Blood Group</label>
                                <select name="blood" class="form-control">
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
                                <select name="gender" class="form-control">
                                    <option value="<?php echo $row['gender']; ?>"><?php echo $row['gender']; ?></option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                <label for="exampleInput">Present Address</label>
                                <input type="text" class="form-control font_black2" value="<?php echo $row['present_address']; ?>" name="present_address">
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                <label for="exampleInput">Permanent Address</label>
                                <input type="text" class="form-control font_black2" value="<?php echo $row['permanet_address']; ?>" name="permanet_address">
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                <label for="exampleInput">Patient Mobile Number</label>
                                <input type="text" class="form-control font_black2" value="<?php echo $row['patient_mobile_number']; ?>" name="patient_mobile_number">
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                <label for="exampleInput">Care Of Name</label>
                                <input type="text" class="form-control font_black2" value="<?php echo $row['care_of_name']; ?>" name="care_of_name">
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                <label for="exampleInput">Care Of Mobile Number</label>
                                <input type="text" class="form-control font_black2" value="<?php echo $row['relative_mobile_number']; ?>" name="relative_mobile_number">
                            </div>
                            <?php if($row['bikash_number']) { ?>
                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                <label for="exampleInput">Bkash Number</label>
                                <input type="text" class="form-control font_black2" value="<?php echo $row['bikash_number']; ?>" name="bikash_number">
                            </div>
                            <?php } ?>
                            <?php if($row['account_number']) {  ?>
                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                <label for="exampleInput">Account Number</label>
                                <input type="text" class="form-control font_black2" value="<?php echo $row['account_number']; ?>" name="account_number">
                            </div>
                            <?php } ?>
                            <?php if($row['bank_name']) { ?>
                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                <label for="exampleInput">Bank Name</label>
                                <input type="text" class="form-control font_black2" value="<?php echo $row['bank_name']; ?>" name="bank_name">
                            </div>
                            <?php } ?>

                            <?php if($row['branch_name']) { ?>
                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                <label for="exampleInput">Branch Name</label>
                                <input type="text" class="form-control font_black2" value="<?php echo $row['branch_name']; ?>" name="branch_name">
                            </div>
                            <?php } ?>
                            <?php if($row['des']) { ?>
                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                <label for="exampleInput">Description</label>
                                <input type="text" class="form-control font_black2" value="<?php echo $row['des']; ?>" name="des">
                            </div>
                            <?php } ?>
                            <?php if($row['image']) { ?>
                            <div class="form-group col-lg-6 col-md-6 col-xs-12">

                                <input type="file" name="file" class="form-control" autocomplete="nope">
                                <img src="<?php echo "../admin/".$row['image']; ?>" width="60" height="60"  alt="Patient file"/> 
                            </div>
                            <?php } ?>
                            <?php if($row['email']) { ?>
                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                <label for="exampleInput">Email</label>
                                <input type="text" class="form-control font_black2" value="<?php echo $row['email']; ?>" name="email">
                            </div>
                            <?php } ?>
                            <?php if($row['password']) { ?>
                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                <label for="exampleInput">Password</label>
                                <input type="text" class="form-control font_black2" value="<?php echo $row['password']; ?>" name="password">
                            </div>
                            <?php } ?>

                            
                        </div>
                        <div class="modal-footer">
                            <button data-dismiss="modal" class="btn btn-default red_btn" type="button">Close</button>
                            <button class="btn btn-success blue_btn" name="edit" type="submit">Save changes</button>
                        </div>
                    </form>
                    <?php
                    if (isset($_POST['edit'])){
                        $name = $_POST['name'];
                        $disease_name = $_POST['disease_name'];
                        $need_money = $_POST['need_money'];
                        $age = $_POST['age'];
                        $gender = $_POST['gender'];
                        $blood = $_POST['blood'];
                        $present_address = $_POST['present_address'];
                        $permanet_address = $_POST['permanet_address'];
                        $hospital_name = $_POST['hospital_name'];
                        $patient_mobile_number = $_POST['patient_mobile_number'];
                        $care_of_name = $_POST['care_of_name'];
                        $relative_mobile_number = $_POST['relative_mobile_number'];
                        $bikash_number = $_POST['bikash_number'];
                        $account_number = $_POST['account_number'];
                        $bank_name = $_POST['bank_name'];
                        $branch_name = $_POST['branch_name'];
                        $des = $_POST['des'];
                        $email = $_POST['email'];
                        $password = $_POST['password'];

                        $file =$_FILES['file']['name'];
                        $file_loc = $_FILES['file']['tmp_name'];
                        $file_size = $_FILES['file']['size'];
                        $file_type = $_FILES['file']['type'];
                        $uploaddir='patient_file/'.$file;
                        $uploadImg='../admin/patient_file/'.$file;
                    $uploadimage=$uploaddir;//specify the full path for file;
                    move_uploaded_file($file_loc,$uploadImg);
                    if (!empty($file)) {
                        $image_p=$uploadimage;
                    }else{
                        $image_p=$patientImage;
                    }



                    $q = mysqli_query($con,"UPDATE evergreen_fund SET name = '$name', disease_name = '$disease_name', need_money = '$need_money',age = '$age', gender = '$gender', blood= '$blood', present_address= '$present_address', permanet_address = '$permanet_address', hospital_name = '$hospital_name',patient_mobile_number= '$patient_mobile_number',care_of_name= '$care_of_name', relative_mobile_number= '$relative_mobile_number',bikash_number= '$bikash_number',account_number= '$account_number', bank_name= '$bank_name', branch_name= '$branch_name', des= '$des', image= '$image_p', email= '$email', password= '$password' WHERE id = '$userid' ");
                    if ($q) {
                      $link="view_fund_edit.php?fundid=$userid";
                      echo "<script> window.open('$link','_self');alert('Fund Information Update Successfully') </script>";
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