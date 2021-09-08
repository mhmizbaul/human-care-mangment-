<?php include ('process/session.php') ?>
<head>
        <?php include ('include/css.php'); ?>
        <link rel="shortcut icon" href="img/favicon.html">
        <title>SMS - Admin Dashboard</title>
    </head>
<?php
?>
	
	 <div class="form-group col-lg-6 col-md-6 col-xs-12">
        <label for="exampleInput">Select Section</label>
        <select name="section" class="form-control m-bot15" id="section">
            <option value="No">Select Section</option>
            <?php $class=$_GET['class'];
	$sql=mysqli_query($con,"SELECT section FROM class WHERE name='$class' "); 
	while ($row=mysqli_fetch_assoc($sql)) {?>
            	<option><?php echo $row['section'];?></option>
		
	<?php }?>
        </select>
    </div>
<?php 
 ?>