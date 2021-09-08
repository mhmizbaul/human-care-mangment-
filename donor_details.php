 <?php include('include/navbar.php'); ?>
 <?php include('include/header.php'); ?>
 
 <?php 
 include ('connect.php');
 $id=$_GET['donorid'];
 ?> 




 <?php
 $sql="select*from  blood_donation where id='$id'";
 $result=mysqli_query($con,$sql) or die(mysqli_error($con));
 $i=0;
 while($row=mysqli_fetch_array($result))
 {
 	$name=$row["name"];   
 	$age=$row["age"];   
 	$gender=$row["gender"];   
 	$blood=$row["blood"];   
 	$present_address=$row["present_address"];
 	$permanet_address=$row["permanet_address"];
 	$occupation=$row["occupation"];
 	$times_blood_donation=$row["times_blood_donation"];
 	$last_date_blood_donation=$row["last_date_blood_donation"];
 	$area=$row["area"];
 	$life_time=$row["life_time"];
 	$mobile=$row["mobile"];
 	$email=$row["email"];
 	$last_date_blood_donation = date('d/m/Y',strtotime($last_date_blood_donation));
 }
 ?> 

 <div class="container">


 	<!-- ************************************* O/E Part ************************************-->
 	<!-- ********************Oe Part************************ -->
 	<!-- ************************************* O/E Part ************************************-->

 	<div class="box box-color magenta box-bordered" style="font-weight: bold;">
 		<div class="box-title">
 			<h3 style="padding: 5px;">
 				Donor View
 			</h3>
 		</div>
 		<div class="box-content">
 			<table class="table table-bordered">
 				<thead>

 				</thead>
 				<tbody>

 					<tr>

 						<td>Donor ID:</td>

 						<td style=""><?php echo $id;?></td>

 					</tr>

 					<tr>

 						<td>Name:</td>

 						<td style=""><?php echo $name;?></td>

 					</tr>
 					<tr>

 						<td>Age:</td>

 						<td style=""><?php echo $age;?></td>

 					</tr>
 					<tr>

 						<td>Gender:</td>

 						<td style=""><?php echo $gender;?></td>

 					</tr><tr>

 						<td>Blood:</td>

 						<td style=""><?php echo $blood;?></td>

 					</tr><tr>

 						<td>Present Address:</td>

 						<td style=""><?php echo $present_address;?></td>

 					</tr><tr>

 						<td>Permanet Address:</td>

 						<td style=""><?php echo $permanet_address;?></td>

 					</tr><tr>

 						<td>Occupation:</td>

 						<td style=""><?php echo $occupation;?></td>

 					</tr><tr>

 						<td>How many times blood donation:</td>

 						<td style=""><?php echo $times_blood_donation;?></td>

 					</tr><tr>

 						<td>Last date of blood donation:</td>

 						<td style=""><?php echo $last_date_blood_donation;?></td>

 					</tr><tr>

 						<td>Area:</td>

 						<td style=""><?php echo $area;?></td>

 					</tr><tr>

 						<td>Are you a life time donor?:</td>

 						<td style=""><?php echo $life_time;?></td>

 					</tr><tr>

 						<td>Mobile:</td>

 						<td style=""><?php echo $mobile;?></td>

 					</tr>
 					<tr>

 						<td>Email:</td>

 						<td style=""><?php echo $email;?></td>

 					</tr>


 				</tbody>

 			</table>


 		</div>
 	</div>
 </div>

 <script>
 	if ( window.history.replaceState ) {
 		window.history.replaceState( null, null, window.location.href );
 	}
 </script>


 <?php include('include/footer.php'); ?>