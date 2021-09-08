<link rel="stylesheet" href="css/custom_teacher.css" type="text/css"/>

<header class="header white-bg side_bg" id="navbar">
    <div class="m_color sidebar-toggle-box">
        <i class="fa fa-bars"></i>
    </div>
    <!--logo start-->
    <a href="dashboard.php" class="logo font_sms s_color">FUND DASHBOARD</a>
    <!--logo end-->
    
    <div class="top-nav ">
        <!--search & user info start-->
        <ul class="nav pull-right top-menu">
            <li>
                <input type="text" class="form-control search search_color font_black" placeholder="Search">
            </li>
            <!-- user login dropdown start-->
            <li class="dropdown log_bg">
                <?php	
                    $name_query = "SELECT * FROM blood_donation where id = '$username' or email='$username' or mobile='$username' 
                    limit 1";
                    $get_name =  mysqli_query($con, $name_query);
                    		while($row = mysqli_fetch_assoc($get_name)){	
                    			$fname = $row['name'];
                    			$l = ' ';
                    ?>
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <span class="username"><?php echo $fname; ?></span>
                <b class="caret"></b>
                </a>
                <ul class="dropdown-menu extended logout log_bg2">
                    <div class="log-arrow-up"></div>
                    <li class="s_color font_white"><a class="s_color font_white" href="view_profile.php?teacherid=<?php echo $row['u_id']; ?>"><i class=" fa fa-suitcase"></i>Profile</a></li>
                    <li class="s_color font_white"><a class="s_color"<?php echo $row['id']; } ?>"><i class="fa fa-cog"></i> </a></li>
                    <li class="s_color font_white"><a  class="s_color"href="#"><i class="fa fa-bell-o"></i> Notification</a></li>
                    <li class="log_bg3"><a  class="s_color font_white"href="logout.php"><i class="fa fa-key"></i> Log Out</a></li>
                </ul>
            </li>
            <!-- user login dropdown end -->
        </ul>
        <!--search & user info end-->
    </div>
</header>