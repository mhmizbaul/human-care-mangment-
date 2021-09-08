 <?php include('include/navbar.php'); ?>
 <?php include('include/header.php'); ?>
 
  <?php 
  include ('connect.php');
  $counter = 0;           
  $result= mysqli_query($con,"SELECT * FROM  evergreen_fund where status='1'");
  $sql=mysqli_num_rows($result);
  if($sql)
   { 
  ?> 
 <div class="container">
  <h3 style="color:#00bfff;padding: 5px;">Fund List</h3>
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
          $age=$item['gender'];
          $blood=$item['need_money'];
          $present_address=$item['hospital_name'];
          $id=$item['id'];
        echo '<td style="font-weight:bold;background-color:#F7E0A3;border: 1px solid black;"  title="Please click the link and view Fund details">'.'<a target="_blank" href="fund_details.php?fundid='.$id.'">'.'<span class="glyphicon glyphicon-user one" style="width:25px;"></span>'.$link.'</a>'.'<br><br>'.'<span class="glyphicon glyphicon glyphicon-list-alt" style="width:25px;"></span>'.'<a target="_blank" href="fund_details.php?fundid='.$id.'">'.$age.'</a>'.'<br><br>'.'<span class="" style="width:25px;">Tk&nbsp;</span>'.'<a target="_blank" href="fund_details.php?fundid='.$id.'">'.$blood.'</a>'.'<br><br>'.'<span class="glyphicon glyphicon-map-marker one" style="width:25px;"></span>'.'<a target="_blank" href="fund_details.php?fundid='.$id.'">'.$present_address.'</a>'.'</td>';
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