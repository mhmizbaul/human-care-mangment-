 <?php include('include/navbar.php'); ?>
 <?php include('include/header.php'); ?>
 <style type="text/css">
 .form-control {
  display: block;
  width: 100%;
  height: 34px;
  padding: 6px 12px;
  font-size: 14px;
  line-height: 1.42857143;
  color: #555;
  background-color: #fff;
  background-image: none;
  border: 1px solid #ccc;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
  box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
  -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
  -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
  transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}

</style>
<?php
include ('connect.php');
if (isset($_POST['submit'])){
  $name = $_POST['name'];
  $disease_name = $_POST['disease_name'];
  $need_money = $_POST['need_money'];
  $age = $_POST['age'];
  $gender = $_POST['gender'];
  $blood = $_POST['blood'];
  $present_address = $_POST['present_address'];
  $permanet_address = $_POST['permanet_address'];
  $hospital_name = $_POST['hospital_name'];
  $patient_mobile_number = $_POST['patient_mobile_number'];
  $care_of_name = $_POST['care_of_name'];
  $relative_mobile_number = $_POST['relative_mobile_number'];
  $bikash_number = $_POST['bikash_number'];
  $account_number = $_POST['account_number'];
  $bank_name = $_POST['bank_name'];
  $branch_name = $_POST['branch_name'];
  $des = $_POST['des'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $status = '0';

    $file =$_FILES['file']['name'];
      $file_loc = $_FILES['file']['tmp_name'];
      $file_size = $_FILES['file']['size'];
      $file_type = $_FILES['file']['type'];
      $uploaddir='patient_file/'.$file;
      $uploadImg='admin/patient_file/'.$file;
$uploadimage=$uploaddir;//specify the full path for file;
move_uploaded_file($file_loc,$uploadImg);
if (!empty($file)) {
  $image_p=$uploadimage;
}else{
  $image_p="";
}

  $ins = mysqli_query($con,"INSERT INTO  evergreen_fund (name, disease_name,  need_money, age,  gender, blood,  present_address, permanet_address, hospital_name, patient_mobile_number, care_of_name, relative_mobile_number, bikash_number,account_number,bank_name,branch_name,des,image,email,password,status) 
    VALUES 
    ('$name', '$disease_name', '$need_money', '$age',  '$gender', '$blood',  '$present_address', '$permanet_address', '$hospital_name','$patient_mobile_number','$care_of_name', '$relative_mobile_number', '$bikash_number', '$account_number', '$bank_name', '$branch_name', '$des', '$image_p', '$email','$password','$status')");
  
  
  if($ins){

   echo '<div class="alert alert-success alert-dismissable" id="flash-msg">
   <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
   <h4><i class="icon fa fa-check"></i>Your Registraion has been Successfully!</h4>
   </div>';
 }
 else{
  echo "<script> alert(' Failed, try again !!') </script>";
//  echo "<script> window.open('../add_teacher.php','_self'); </script>";
}
}


?>
<div class="container" style="padding-top: 5px;">
  <div class="justify-content-center">
    <div class="col-md-offset-2 col-md-8">
      <div class="card">
        <div class="card-body">
            <form  class="form-horizontal" enctype="multipart/form-data" method="POST" role="form" action="">
            <div class="form-group" style="background-color:#00bfff;">
              <h3 style="text-align: center;color:black;padding: 5px;">Evergreen Fund Registration</h3>
            </div>
            <div class="form-group">
              <label for="name" class="cols-sm-2 control-label">Patient Name</label>
              <div class="cols-sm-10">
               <input type="text" class="form-control" name="name" id="name" placeholder="Enter your Patient Full Name" required />
             </div>
           </div>
           <div class="form-group">
            <label for="name" class="cols-sm-2 control-label">Disease Name</label>
            <div class="cols-sm-10">
              <input type="text" class="form-control" name="disease_name" id="disease_name" placeholder="Enter your disease name" required />
            </div>
            </div>
            <div class="form-group">
              <label for="name" class="cols-sm-2 control-label">Need money</label>
              <div class="cols-sm-10">
                <input type="text" class="form-control" name="need_money" id="disease_name" placeholder="Enter your Need money" required />
              </div>
            </div>
            <div class="form-group">
              <label for="name" class="cols-sm-2 control-label">Age</label>
              <div class="cols-sm-10">
                <input type="text" class="form-control" name="age" id="disease_name" placeholder="Enter your Age" required />
              </div>
            </div>
            <div class="form-group">
              <label for="name" class="cols-sm-2 control-label">Gender</label>
              <div class="cols-sm-10">
                <select name="gender" class="form-control" required">
                  <option>Select Gender</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="name" class="cols-sm-2 control-label">Blood Group</label>
              <div class="cols-sm-10">
                <select name="blood" class="form-control" required>
                  <option value="">Select Blood Group</option>
                  <option value="A+">A+</option>
                  <option value="B+">B+</option>
                  <option value="AB+">AB+</option>
                  <option value="O+">O+</option>
                  <option value="A-">A-</option>
                  <option value="B-">B-</option>
                  <option value="AB-">AB-</option>
                  <option value="O-">O-</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="name" class="cols-sm-2 control-label">Present Address</label>
              <div class="cols-sm-10">
                <textarea  name="present_address" class="form-control" rows="3" cols="50" required>

                </textarea>
              </div>
            </div>
            <div class="form-group">
              <label for="name" class="cols-sm-2 control-label">Permament Address</label>
              <div class="cols-sm-10">
               <textarea  name="permanet_address" class="form-control" rows="3" cols="50">

               </textarea>
             </div>
           </div>

           <div class="form-group">
            <label for="name" class="cols-sm-2 control-label">Hospital Name</label>
            <div class="cols-sm-10">
              <input type="text" class="form-control" name="hospital_name" id="disease_name" placeholder="Enter your Hospital Name" required />
            </div>
          </div>
          <div class="form-group">
            <label for="name" class="cols-sm-2 control-label">Patient Mobile Number</label>
            <div class="cols-sm-10">
              <input type="text" class="form-control" name="patient_mobile_number" id="disease_name" placeholder="Enter your Patient Mobile Number" required />
            </div>
          </div>
          <div class="form-group">
            <label for="name" class="cols-sm-2 control-label">Care of Name</label>
            <div class="cols-sm-10">
              <input type="text" class="form-control" name="care_of_name" id="disease_name" placeholder="Enter your Care of Name" required />
            </div>
          </div>
          <div class="form-group">
            <label for="name" class="cols-sm-2 control-label">Care of Mobile Number/Nearest Relative Mobile Number</label>
            <div class="cols-sm-10">
              <input type="text" class="form-control" name="relative_mobile_number" id="disease_name" placeholder="Enter your Nearest Relative Mobile Number" required />
            </div>
          </div>
          <div class="form-group">
            <label for="name" class="cols-sm-2 control-label">Bikash/Rocket/Nagad Number</label>
            <div class="cols-sm-10">
              <input type="text" class="form-control" name="bikash_number" id="disease_name" placeholder="Enter your Bikash/Rocket/Nagad Number" />
            </div>
          </div>
          <div class="form-group">
            <label for="name" class="cols-sm-2 control-label">Bank Account Number</label>
            <div class="cols-sm-10">
              <input type="text" class="form-control" name="account_number" id="disease_name" placeholder="Enter your Bank Account Number" />
            </div>
          </div>
          <div class="form-group">
            <label for="name" class="cols-sm-2 control-label">Bank Name</label>
            <div class="cols-sm-10">
              <input type="text" class="form-control" name="bank_name" id="disease_name" placeholder="Enter your Bank Name" />
            </div>
          </div>
          <div class="form-group">
            <label for="name" class="cols-sm-2 control-label">Branch Name</label>
            <div class="cols-sm-10">
              <input type="text" class="form-control" name="branch_name" id="disease_name" placeholder="Enter your Bank Name" />
            </div>
          </div>

          <div class="form-group">
            <label for="name" class="cols-sm-2 control-label">Description</label>
            <div class="cols-sm-10">
             <textarea  name="des" class="form-control" rows="3" cols="50">

             </textarea>
           </div>
         </div>
          <div class="form-group">
          <label for="email" class="cols-sm-2 control-label">File Upload</label>
          <div class="cols-sm-10">
            <input type="file" name="file" class="form-control" autocomplete="nope">
          </div>
        </div>
         <div class="form-group">
          <label for="email" class="cols-sm-2 control-label">Your Email</label>
          <div class="cols-sm-10">
            <input type="text" class="form-control" name="email" id="email" placeholder="Enter your Email" required />
          </div>
        </div>
        <div class="form-group">
          <label for="password" class="cols-sm-2 control-label">Password</label>
          <div class="cols-sm-10">
            <input type="password" class="form-control" name="password" id="password" placeholder="Enter your Password" required />
          </div>
        </div>
        <div style="float: right;" class="form-group">
          <button type="submit" name="submit" class="btn btn-primary">Register</button>
        </div>
      </form>
    </div>

  </div>
</div>
</div>
</div>
<script>
  window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
      $(this).remove(); 
    });
  }, 3000);

</script>
<?php include('include/footer.php'); ?>