<link rel="stylesheet" href="css/custom_school.css" type="text/css"/>

<?php include ('process/session.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include ('include/css.php'); ?>
    <link rel="shortcut icon" href="img/favicon.html">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" media="screen" href="http://cdnjs.cloudflare.com/ajax/libs/fancybox/1.3.4/jquery.fancybox-1.3.4.css" />
    <style type="text/css">
    a.fancybox img {
        border: none;
        box-shadow: 0 1px 7px rgba(0,0,0,0.6);
        -o-transform: scale(1,1); -ms-transform: scale(1,1); -moz-transform: scale(1,1); -webkit-transform: scale(1,1); transform: scale(1,1); -o-transition: all 0.2s ease-in-out; -ms-transition: all 0.2s ease-in-out; -moz-transition: all 0.2s ease-in-out; -webkit-transition: all 0.2s ease-in-out; transition: all 0.2s ease-in-out;
    } 
    a.fancybox:hover img {
        position: relative; z-index: 999; -o-transform: scale(1.03,1.03); -ms-transform: scale(1.03,1.03); -moz-transform: scale(1.03,1.03); -webkit-transform: scale(1.03,1.03); transform: scale(1.03,1.03);
    }
</style>        
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
                <div class="panel-body">
                    <div class="table-responsive" tabindex="1" style="overflow: hidden; outline: none;">
                        <table class="table table-bordered table-striped" id="dynamic-table">
                            <thead class="account_head_color font_white3 text-center">
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Patient Phone</th>
                                    <th>Care Of Name</th>
                                    <th>Care Of Phone</th>
                                    <th>Blood Group</th>
                                    <th>Age</th>
                                    <th>Status</th>
                                    <th>File</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody class="font_black2 account_bg">
                                <?php 
                                $counter = 0;                       
                                $sql= mysqli_query($con,"SELECT * FROM evergreen_fund");
                                while ($row = mysqli_fetch_assoc($sql)) {

                                    ?> 
                                    <tr>
                                        <th style="width:1%;" scope="row"><?php echo ++$counter ?></th>
                                        <td style="width:17%;"><?php echo $row["name"] ;?> </td>
                                        <td><?php echo $row["patient_mobile_number"]; ?></td>
                                        <td><?php echo $row["care_of_name"]; ?></td>
                                        <td><?php echo $row["relative_mobile_number"]; ?></td>
                                        <td><?php echo $row["blood"]; ?></td>
                                        <td><?php echo $row["age"]; ?></td>
                                        <td> <?php
                                        if ($row['status']=='1') {
                                           echo "Approved";
                                       }else{
                                        echo "Not Approved";
                                    }

                                    ?></td>

                                    <td><?php if(!empty($row["image"])) { ?><a href="<?php echo $row["image"];?>" download><img src="<?php echo $row["image"];?>" alt="Patient file" width="50" height="50"></a><?php } ?></td>
                                    <td>
                                     <a href="view_fund_details.php?fundid=<?php echo $row['id'] ?>"><i class="fa fa-eye font_black2"></i></a>&nbsp;&nbsp;
                                     <a href="view_fund_edit.php?fundid=<?php echo $row['id'] ?>"><i class="fa fa-wrench font_black2"></i></a>
                                     <form method="post" action="" style="display: inline-flex;">
                                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                        <button class="btn" name="edit" title="approve" type="submit"><i class="fa fa-check"></i></button>
                                    </form>
                                    <a href="view_fund.php?did=<?php echo $row['id'] ?>"><i class="fa fa-trash-o m_color"></i></a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </section>
    <?php
    if (isset($_POST['edit'])){
                      //$status = '1';
      $userid = $_POST['id'];
      $sql= mysqli_query($con,"SELECT * FROM evergreen_fund WHERE id='$userid'");
      while ($row = mysqli_fetch_assoc($sql)) {
        $stavalue=$row['status'];
        if ($stavalue=='0'){ 
         $q = mysqli_query($con,"UPDATE  evergreen_fund SET status = '1' WHERE id = '$userid' ");   
     }else{
        $q = mysqli_query($con,"UPDATE  evergreen_fund SET status = '0' WHERE id = '$userid' ");
    }
}

if ($q) {
   echo "<script>alert('Successfully Status Change')</script>";
   echo "<script> window.open('view_fund.php','_self'); </script>";
}



}
?>
<!--main content end-->
<!--footer start-->
<?php include ('include/footer.php'); ?>
<!--footer end-->
</section>
<!-- js placed at the end of the document so the pages load faster -->
<?php include ('include/js.php'); ?>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/fancybox/1.3.4/jquery.fancybox-1.3.4.pack.min.js"></script>
<script type="text/javascript">
    $(function($){
        var addToAll = false;
        var gallery = true;
        var titlePosition = 'inside';
        $(addToAll ? 'img' : 'img.fancybox').each(function(){
            var $this = $(this);
            var title = $this.attr('title');
            var src = $this.attr('data-big') || $this.attr('src');
            var a = $('<a href="#" class="fancybox"></a>').attr('href', src).attr('title', title);
            $this.wrap(a);
        });
        if (gallery)
            $('a.fancybox').attr('rel', 'fancyboxgallery');
        $('a.fancybox').fancybox({
            titlePosition: titlePosition
        });
    });
    $.noConflict();
</script>       
</body>
</html>
<?php 

if(isset($_GET['did'])){
  $id = $_GET['did'];
  $i = mysqli_query($con,"DELETE FROM  evergreen_fund WHERE id = '$id'");

  if($i==1){

echo"<script type='text/javascript'>alert('Successfully Deleted');
        document.location='view_fund.php'</script>";

}


else{
   echo "<script> alert(' Failed, try again !!') </script>";
    //  echo "<script> window.open('../add_teacher.php','_self'); </script>";
}  
}
?>