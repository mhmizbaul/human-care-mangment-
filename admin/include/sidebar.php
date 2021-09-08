<link rel="stylesheet" href="css/custom_school.css" type="text/css"/>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<aside>
    <div id="sidebar"  class="nav-collapse side_bg">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
            <li>
                <a class="active" href="dashboard.php">
                    <i class="m_color glyphicon glyphicon-home"></i>  
                    <span class="font_white">Dashboard</span>
                </a>
            </li>
            <?php	
            $name_query = "SELECT * FROM admin where u_id = '$username' or email='$username' or phone='$username' 
            limit 1";
            $get_name =  mysqli_query($con, $name_query);
            while($row = mysqli_fetch_assoc($get_name)){	
             $fname = $row['fname'];
             $lname = $row['lname'];
             $l = ' ';
             ?>
             <li>
                <a href="view_profile.php?adminid=<?php echo $row['u_id'];  } ?>">
                    <i class="m_color glyphicon glyphicon-user"></i>
                    <span class="font_white"> View Profile</span>
                </a>
            </li>
            <li>
                <a href="view_donor.php">
                    <i class="m_color glyphicon glyphicon-user"></i>
                    <span class="font_white">Donors</span>
                </a>
            </li>
            <li>
                <a href="view_fund.php">
                    <i class="m_color glyphicon glyphicon-usd"></i>
                    <span class="font_white">Evergreen Funds</span>
                </a>
            </li>

        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>