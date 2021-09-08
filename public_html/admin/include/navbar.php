<link rel="stylesheet" href="css/custom_school.css" type="text/css"/>
<header class="header white-bg navbar_color" id="navbar">
    <div class=" m_color sidebar-toggle-box">
        <i class="fa fa-bars"></i>
    </div>
    <!--logo start-->
    <a href="dashboard.php" class="logo font_sms"><span class="s_color">Admin Dashboard</span></a>
    <!--logo end-->
    <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        
        <!--  notification end -->
    </div>
    <div class="top-nav">
        <!--search & user info start-->
        <ul class="nav pull-right top-menu">
            <li>
                <input type="text" class="form-control search search_color font_black" placeholder="Search">
            </li>
            <!-- user login dropdown start-->
            <li class="dropdown log_bg">
                <?php	
                    $name_query = "SELECT * FROM admin where u_id = '$username' or email='$username' or phone='$username' 
                    limit 1";
                    $get_name =  mysqli_query($con, $name_query);
                    		while($row = mysqli_fetch_assoc($get_name)){	
                    			$fname = $row['fname'];
                    			$lname = $row['lname'];
                    			$l = ' ';
                    			$pic = $row['pro_pic'];
                    ?>
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img style="height:29px;width:29px;" alt="" src="uploads/pro_pic/<?php echo $pic; ?>">
                <span class="username"><?php echo $fname,  $l,$lname ; ?></span>
                <b class="caret"></b>
                </a>
                <ul class="dropdown-menu extended logout log_bg2">
                    <div class="log-arrow-up"></div>
                    <li ><a class="s_color" href="view_profile.php?adminid=<?php echo $row['u_id']; ?>"><i class=" fa fa-suitcase s_color"></i>Profile</a></li>
                    <li class="s_color"><a class="s_color" href="setting.php?adminid=<?php echo $row['u_id']; } ?>"><i class="fa fa-cog s_color"></i> Settings</a></li>
                    <li class="s_color"><a class="s_color" href="#"><i class="fa fa-bell-o s_color"></i> Notification</a></li>
                    <li class="log_bg3"><a class="s_color font_white" href="logout.php"><i class="fa fa-key "></i> Log Out</a></li>
                </ul>
            </li>
            <!-- user login dropdown end -->
        </ul>
        <!--search & user info end-->
    </div>
</header>