 <?php include('include/navbar.php'); ?>
 <?php include('include/header.php'); ?>

 <!--<style type="text/css">
     .details li {
      list-style: none;
    }
    li {
        margin-bottom:10px;
        
    } 
 </style>-->
  <?php 
  include ('connect.php');
  $counter = 0;           
  $result= mysqli_query($con,"SELECT * FROM blood_donation where  donor_type='Kidney' order by id desc");
  $sql=mysqli_num_rows($result);
  if($sql)
   {
    
  ?> 
 <div class="container">
  <h3 style="color:#00bfff;padding: 5px;">Kidney Donor List</h3>
  <div class="row">
  <div class="col-md-12">
      <?php
      $i = 0;
      echo '<table id="datatable" class="table table-striped table-bordered" width="100%" cellspacing="0">
      <tr>';
      foreach($result as $item){
        $i++;
      
        if(!empty($item['name'])) { 
          $link=$item['name'];
          $age=$item['age'];
          $blood=$item['blood'];
          $present_address=$item['present_address'];
          $times_blood_donation=$item['times_blood_donation'];
          $id=$item['id'];
        echo '<td style="font-weight:bold;background-color:#F7E0A3;border: 1px solid black;"  title="Please click the link and view Kidney donor details">'.'<a target="_blank" href="donor_details.php?donorid='.$id.'">'.'<span class="glyphicon glyphicon-user one" style="width:25px;"></span>'.$link.'</a>'.'<br><br>'.'<span class="glyphicon glyphicon glyphicon-time one" style="width:25px;"></span>'.'<a target="_blank" href="donor_details.php?donorid='.$id.'">'.$age.'</a>'.'<br><br>'.'<span class="glyphicon glyphicon glyphicon-tint one" style="width:25px;"></span>'.'<a target="_blank" href="donor_details.php?donorid='.$id.'">'.$blood.'</a>'.'<br><br>'.'<span class="glyphicon glyphicon-map-marker one" style="width:25px;"></span>'.'<a target="_blank" href="donor_details.php?donorid='.$id.'">'.$present_address.'</a>'.'</td>';
    if($i == 2) { // three items in a row. Edit this to get more or less items on a row
      echo '</tr><tr>';
      $i = 0;
    }
}
}
echo '</tr>
</table>';
}else{
  echo "<p style='text-align:center;color:red'>Data Not Found</p>";
}
?>
</div>
</div>
</div>
<?php include('include/footer.php'); ?>