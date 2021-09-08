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
                $name_query = "SELECT * FROM teacher where u_id = '$username' or email='$username' or phone='$username' 
                limit 1";
                $get_name =  mysqli_query($con, $name_query);
                		while($row = mysqli_fetch_assoc($get_name)){	
                			$fname = $row['fname'];
                			$lname = $row['lname'];
                			$l = ' ';
                ?>
            <li>
                <a href="view_profile.php?teacherid=<?php echo $row['u_id'];  } ?>">
                <i class="m_color glyphicon glyphicon-user"></i>
                <span class="font_white">Edit Profile</span>
                </a>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" >
                <i class="m_color glyphicon glyphicon-user"></i>
                <span class="font_white">Teachers</span>
                </a>
                <ul class="sub">
                    <li><a class="font_white" href="view_teacher.php"><span class="glyphicon glyphicon-forward font_white2"> View Teacher</span></a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" >
                <i class="m_color fa fa-book"></i>
                <span class="font_white">Live Result</span>
                </a>
                <ul class="sub">
                    <li><a  href="live_result.php"><span class=" glyphicon glyphicon-forward font_white2">Add Live Result</span></a></li>
                </ul>
            </li>
			<li class="sub-menu">
                <a href="javascript:;" >
                <i class="m_color fa fa-book"></i>
                <span class="font_white">Notice</span>
                </a>
				<ul class="sub">
                    <li><a  href="view_teacher_notice.php"><span class=" glyphicon glyphicon-forward font_white2">View Notice</span></a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" >
                <i class="m_color glyphicon glyphicon-education"></i>
                <span class="font_white">Students</span>
                </a>
                <ul class="sub">
                    <li><a  href="view_student.php"><span class=" glyphicon glyphicon-forward font_white2"> View Student</span></a></li>
                    <li><a  href="student_attendances.php"><span class=" glyphicon glyphicon-forward font_white2"> Student Attendance</span></a></li>
                    <li><a  href="v.php"><span class=" glyphicon glyphicon-forward font_white2"> View Student Attendance</span></a></li>
                    <li><a  href="search_student.php"><span class=" glyphicon glyphicon-forward font_white2"> Search Student</span></a></li>
                </ul>
            </li>
			<li class="sub-menu">
                <a href="javascript:;" >
                <i class="m_color fa fa-book"></i>
                <span class="font_white">Class & Subjects</span>
                </a>
                <ul class="sub">
                    <li><a  href="view_teacher_subject.php"><span class=" glyphicon glyphicon-forward font_white2">View class</span></a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" >
                <i class="m_color fa fa-book"></i>
                <span class="font_white">Exam</span>
                </a>
                <ul class="sub">
                    <li><a  href="view_teacher_exam_duty.php"><span class=" glyphicon glyphicon-forward font_white2">View Exam Duty</span></a></li>
                     <li><a  href="view_exam_routine.php" target="_blank"><span class=" glyphicon glyphicon-forward font_white2">View Exam Routine</span></a></li>
                </ul>
            </li>
            
                    </li>
                </ul>
            </li>
            <!--multi level menu end-->
        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>