<?php include ('process/session.php') ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include ('include/css.php'); ?>
        <link rel="shortcut icon" href="img/favicon.html">
        <title>Admin Dashboard</title>
    </head>
    <body>
        <section id="container" class="overlay">
            <!--Navbar start-->
            <?php include ('include/navbar.php'); ?>
            <!--Navbar end-->
            <!--sidebar start-->
            <?php include ('include/sidebar.php'); ?>
            <!--sidebar end-->
            <!--main content start-->
            <section id="main-content">
                <section class="wrapper">
                    <!--state overview start-->
                    <?php include ('include/overview.php') ; ?>
                    <!--state overview end-->
                    <!-- CUSTOM CODE WILL GOES HERE  -->
                    <!-- CUSTOM CODE WILL GOES HERE  -->
					<div class="row-fluid">
					<div class="col-md-3">
					</div>
				<div  class="col-md-9 col-md-offset-1">
				<h4 class="m_color"><span style="margin-left: 232px;" id=tick2>
				</span>&nbsp;| 
<script>
				function show2(){
				if (!document.all&&!document.getElementById)
				return
				thelement=document.getElementById? document.getElementById("tick2"): document.all.tick2
				var Digital=new Date()
				var hours=Digital.getHours()
				var minutes=Digital.getMinutes()
				var seconds=Digital.getSeconds()
				var dn="PM"
				if (hours<12)
				dn="AM"
				if (hours>12)
				hours=hours-12
				if (hours==0)
				hours=12
				if (minutes<=9)
				minutes="0"+minutes
				if (seconds<=9)
				seconds="0"+seconds
				var ctime=hours+":"+minutes+":"+seconds+" "+dn
				thelement.innerHTML=ctime
				setTimeout("show2()",1000)
				}
				window.onload=show2
				//-->
</script>
	      <?php
            $date = new DateTime();
            echo $date->format('l, F jS, Y');
          ?><h4>
            </div>
                    <!-- CUSTOM CODE WILL GOES HERE  -->
                    <!-- CUSTOM CODE WILL GOES HERE  -->
                   
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