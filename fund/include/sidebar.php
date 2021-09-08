<aside>
    <div id="sidebar"  class="nav-collapse side_bg">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
            <li>
                <a class="active" href="dashboard.php">
                    <i class="m_color fa fa-dashboard"></i>
                    <span class="font_white">Dashboard</span>
                </a>
            </li>
            <?php	
            $name_query = "SELECT * FROM evergreen_fund where email = '$username' 
            limit 1";
            $get_name =  mysqli_query($con, $name_query);
            while($row = mysqli_fetch_assoc($get_name)){	
             $fname = $row['name'];
             $l = ' ';
             ?>
             <li>
                <a href="view_profile.php?fundid=<?php echo $row['id'];  } ?>">
                    <i class="m_color glyphicon glyphicon-user"></i>
                    <span class="font_white">Edit Profile</span>
                </a>
            </li>
            
        </li>
    </ul>
</li>
<!--multi level menu end-->
</ul>
<!-- sidebar menu end-->
</div>
</aside>