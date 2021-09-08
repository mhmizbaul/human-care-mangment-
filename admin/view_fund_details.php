<link rel="stylesheet" href="css/custom_school.css" type="text/css"/>

<?php include ('process/session.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include ('include/css.php'); ?>
    <link rel="shortcut icon" href="img/favicon.html">
    <title>Admin Dashboard</title>
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
                    if(isset($_GET['fundid'])){
                        $fundid = $_GET['fundid'];
                        $sql = mysqli_query($con,"SELECT * FROM  evergreen_fund WHERE id='$fundid'");
                        while ($row = mysqli_fetch_assoc($sql)) {

                            ?>
                            <aside class="profile-nav col-lg-3">
                                <section class="panel">
                                    <div class="user-heading round pro_account">

                                        <h1 class="font_sms"><?php echo $row["name"];?></h1>
                                        <p><?php echo $row["email"];?></p>
                                    </div>

                                </section>
                            </aside>
                            <aside class="profile-info col-lg-9">
                                <section class="panel">

                                    <div class="panel-body bio-graph-info pro_account_bg">
                                        <h1 class="font_sms  bold_font font_blue_20 text-center">Bio Graph</h1><hr></hr>
                                        <div class="row font_black2">
                                            <div class="bio-row ">
                                                <p ><span class="font_black">Name </span>: <?php echo $row['name']; ?></p>
                                            </div>
                                            <div class="bio-row">
                                                <p><span class="font_black">Disease Name</span>: <?php echo $row['disease_name']; ?></p>
                                            </div>
                                            <div class="bio-row">
                                                <p><span class="font_black">Need Money </span>: <?php echo $row['need_money']; ?></p>
                                            </div>
                                            <div class="bio-row">
                                                <p><span class="font_black">Age </span>: <?php echo $row['age']; ?></p>
                                            </div>
                                            <div class="bio-row">
                                                <p><span class="font_black">Gender</span>: <?php echo $row['gender']; ?></p>
                                            </div>
                                            <div class="bio-row">
                                                <p><span class="font_black">Present Address </span>: <?php echo $row['present_address']; ?></p>
                                            </div>
                                            <div class="bio-row">
                                                <p><span class="font_black">Permanent Address </span>: <?php echo $row['permanet_address']; ?></p>
                                            </div>
                                            <div class="bio-row">
                                                <p><span class="font_black">Hospital Name </span>: <?php echo $row['hospital_name']; ?></p>
                                            </div>
                                            <div class="bio-row">
                                                <p><span class="font_black">Patient Mobile Number</span>: <?php echo $row['patient_mobile_number']; ?></p>
                                            </div>
                                            <div class="bio-row">
                                                <p><span class="font_black">Care Of Name </span>: <?php echo $row['care_of_name']; ?></p>
                                            </div>
                                            <div class="bio-row">
                                                <p><span class="font_black">Care Of Mobile Number </span>: <?php echo $row['relative_mobile_number']; ?></p>
                                            </div>
                                            <div class="bio-row">
                                                <p><span class="font_black">Bikash Number</span>: <?php echo $row['bikash_number']; ?></p>
                                            </div>
                                            <div class="bio-row">
                                                <p><span class="font_black">Bank Account Number </span>: <?php echo $row['account_number']; ?></p>
                                            </div>
                                            <div class="bio-row">
                                                <p><span class="font_black">Bank Name </span>: <?php echo $row['bank_name']; ?></p>
                                            </div>
                                            <div class="bio-row">
                                                <p><span class="font_black">Branch Name</span>: <?php echo $row['branch_name']; ?></p>
                                            </div>
                                            <div class="bio-row">
                                                <p><span class="font_black">Description</span>: <?php echo $row['des']; ?></p>
                                            </div>
                                            <div class="bio-row">
                                                <p><span class="font_black">File</span>: <img src="<?php echo $row["image"];?>" alt="Patient file" width="50" height="50"></p>
                                            </div>
                                            <div class="bio-row">
                                                <p><span class="font_black">Email</span>: <?php echo $row['email']; ?></p>
                                            </div>
                                            <div class="bio-row">
                                                <p><span class="font_black">Password</span>: <?php echo $row['password']; ?></p>
                                            </div>
                                            <div class="bio-row">
                                                <p><span class="font_black">Status</span>: <?php
                                                if ($row['status']=='1') {
                                                 echo "Approved";
                                             }else{
                                                echo "Not Approved";
                                            }

                                            ?></p>
                                        </div>

                                    </div>
                                </div>
                            </section>

                        </aside>
                        <?php }} ?>
                    </div>
                    <!-- page end-->
                    <!-- CUSTOM CODE WILL ENDS HERE  -->
                </section>
            </section>
            <!--main content end-->
            <!--footer start-->
            <?php include ('include/footer.php'); ?>
            <!--footer end-->
        </section>
        <!-- js placed at the end of the document so the pages load faster -->
        <?php include ('include/js.php'); ?>
    </body>
    </html>