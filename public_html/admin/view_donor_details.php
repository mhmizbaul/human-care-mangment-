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
                    if(isset($_GET['donorid'])){
                        $accountantid = $_GET['donorid'];
                        $sql = mysqli_query($con,"SELECT * FROM blood_donation WHERE id='$accountantid'");
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
                                                <p><span class="font_black">Age</span>: <?php echo $row['age']; ?></p>
                                            </div>
                                            <div class="bio-row">
                                                <p><span class="font_black">Gender </span>: <?php echo $row['gender']; ?></p>
                                            </div>
                                            <div class="bio-row">
                                                <p><span class="font_black">Blood </span>: <?php echo $row['blood']; ?></p>
                                            </div>
                                            <div class="bio-row">
                                                <p><span class="font_black">Present Address</span>: <?php echo $row['present_address']; ?></p>
                                            </div>
                                            <div class="bio-row">
                                                <p><span class="font_black">Permanet Address </span>: <?php echo $row['permanet_address']; ?></p>
                                            </div>
                                            <div class="bio-row">
                                                <p><span class="font_black">How many times blood donation </span>: <?php echo $row['times_blood_donation']; ?></p>
                                            </div>
                                            <div class="bio-row">
                                                <p><span class="font_black">Last Date of Blood Donation </span>: <?php 

                                                $last_date_blood_donation = date('d/m/Y',strtotime($row['last_date_blood_donation']));
                                                echo $last_date_blood_donation;?></p>
                                            </div>
                                            <div class="bio-row">
                                                <p><span class="font_black">Area</span>: <?php echo $row['area']; ?></p>
                                            </div>
                                            <div class="bio-row">
                                                <p><span class="font_black">Are you life time blood donor </span>: <?php echo $row['life_time']; ?></p>
                                            </div>
                                            <div class="bio-row">
                                                <p><span class="font_black">Mobile </span>: <?php echo $row['mobile']; ?></p>
                                            </div>
                                            <div class="bio-row">
                                                <p><span class="font_black">Email</span>: <?php echo $row['email']; ?></p>
                                            </div>
                                            <div class="bio-row">
                                                <p><span class="font_black">Password </span>: <?php echo $row['password']; ?></p>
                                            </div>
                                             <div class="bio-row">
                                                <p><span class="font_black">Donor Type </span>: <?php echo $row['donor_type']; ?></p>
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