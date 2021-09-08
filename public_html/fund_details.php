 <?php include('include/navbar.php'); ?>
 <?php include('include/header.php'); ?>
 
 <?php 
 include ('connect.php');
 $id=$_GET['fundid'];
 ?> 




 <?php
 $sql="select*from  evergreen_fund where id='$id'";
 $result=mysqli_query($con,$sql) or die(mysqli_error($con));
 $i=0;
 while($row=mysqli_fetch_array($result))
 {
 	$name=$row["name"];   
 	$disease_name=$row["disease_name"];   
 	$need_money=$row["need_money"];   
 	$age=$row["age"];   
 	$gender=$row["gender"];
 	$blood=$row["blood"];
 	$present_address=$row["present_address"];
 	$permanet_address=$row["permanet_address"];
 	$hospital_name=$row["hospital_name"];
 	$patient_mobile_number=$row["patient_mobile_number"];
 	$care_of_name=$row["care_of_name"];
 	$relative_mobile_number=$row["relative_mobile_number"];
 	$bikash_number=$row["bikash_number"];
 	$account_number=$row["account_number"];
 	$bank_name=$row["bank_name"];
 	$branch_name=$row["branch_name"];
 	$des=$row["des"];
 	$image=$row["image"];
 	$email=$row["email"];
 	$password=$row["password"];
 	$status=$row["status"];
 	$id=$row["id"];
 	
 	//$last_date_blood_donation = date('d/m/Y',strtotime($last_date_blood_donation));
 }
 ?> 

 <div class="container">


 	<!-- ************************************* O/E Part ************************************-->
 	<!-- ********************Oe Part************************ -->
 	<!-- ************************************* O/E Part ************************************-->

 	<div class="box box-color magenta box-bordered" style="font-weight: bold;">
 		<div class="box-title">
 			<h3 style="padding: 5px;">
 				Fund Details
 			</h3>
 		</div>
 		<div class="box-content">
 			<table class="table table-bordered">
 				<thead>

 				</thead>
 				<tbody>

 					<tr>

 						<td>Fund ID:</td>

 						<td style=""><?php echo $id;?></td>

 					</tr>

 					<tr>

 						<td>Patient Name:</td>

 						<td style=""><?php echo $name;?></td>

 					</tr>
 					<tr>

 						<td>Disease Name:</td>

 						<td style=""><?php echo $disease_name;?></td>

 					</tr>
 					<tr>

 						<td>Need Money:</td>

 						<td style=""><?php echo $need_money;?></td>

 					</tr><tr>

 						<td>Age:</td>

 						<td style=""><?php echo $age;?></td>

 					</tr><tr>

 						<td>Gender:</td>

 						<td style=""><?php echo $gender;?></td>

 					</tr><tr>

 						<td>Blood:</td>

 						<td style=""><?php echo $blood;?></td>

 					</tr><tr>

 						<td>Present Address:</td>

 						<td style=""><?php echo $present_address;?></td>

 					</tr><tr>

 						<td>Permanent Address:</td>

 						<td style=""><?php echo $permanet_address;?></td>

 					</tr><tr>

 						<td>Hospital Name:</td>

 						<td style=""><?php echo $hospital_name;?></td>

 					</tr><tr>

 						<td>Patient Mobile Number:</td>

 						<td style=""><?php echo $patient_mobile_number;?></td>

 					</tr><tr>

 						<td>Care Of Name:</td>

 						<td style=""><?php echo $care_of_name;?></td>

 					</tr><tr>

 						<td>Care Of Mobile Number:</td>

 						<td style=""><?php echo $relative_mobile_number;?></td>

 					</tr>
 					<?php if($bikash_number) { ?>
 					<tr>

 						<td>Bikash Number:</td>

 						<td style=""><?php echo $bikash_number;?></td>

 					</tr>
 					<?php } ?>
 					<?php if($account_number) { ?>
 					<tr>

 						<td>Bank Account Number:</td>

 						<td style=""><?php echo $account_number;?></td>

 					</tr>
 					<?php } ?>
 					<?php if($bank_name) { ?>
 					<tr>

 						<td>Bank Name:</td>

 						<td style=""><?php echo $bank_name;?></td>

 					</tr>
 					<?php } ?>
 					<?php if($branch_name) { ?>
 					<tr>

 						<td>Branch Name:</td>

 						<td style=""><?php echo $branch_name;?></td>

 					</tr>
 					<?php } ?>

 					<?php if($des) { ?>
 					<tr>

 						<td>Description:</td>

 						<td style=""><?php echo $des;?></td>

 					</tr>
 					<?php } ?>
 					<?php if($image) { ?>
 					<tr>

 						<td>File:</td>

 						<td style=""><a href="<?php echo "admin/".$image;?>" download><img src="<?php echo "admin/".$image;?>" alt="Patient file" width="50" height="50"></a></td>

 					</tr>
 					<?php } ?>
 					<?php if($email) { ?>
 					<tr>

 						<td>Email:</td>

 						<td style=""><?php echo $email;?></td>

 					</tr>
 					<?php } ?>
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