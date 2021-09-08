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
  $age = $_POST['age'];
  $gender = $_POST['gender'];
  $donorType = $_POST['donorType'];
  $blood = $_POST['blood'];
  $present_address = $_POST['present_address'];
  $permanet_address = $_POST['permanet_address'];
  $occupation = $_POST['occupation'];
  $times_blood_donation = $_POST['times_blood_donation'];
  $last_date_blood_donation = $_POST['last_date_blood_donation'];
  $area = $_POST['area'];
  $life_time = $_POST['life_time'];
  $mobile = $_POST['mobile'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $ins = mysqli_query($con,"INSERT INTO blood_donation (name, age,  gender, donor_type, blood,  present_address, permanet_address,  occupation, times_blood_donation, last_date_blood_donation, area, life_time, mobile, email,password) 
    VALUES 
    ('$name', '$age', '$gender','$donorType','$blood',  '$present_address', '$permanet_address',  '$occupation', '$times_blood_donation', '$last_date_blood_donation','$area','$life_time', '$mobile', '$email', '$password')");
  
  
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
          <form class="form-horizontal" method="post" action="">
            <div class="form-group" style="background-color:#00bfff;">
              <h3 style="text-align: center;color:black">Donor Registration</h3>
              <p style="text-align: center;color:black">Already A Dornor ? Click To  <a href="donor" style="color: white">Login As Donor</a></p></div>
               <div class="form-group">
              <label for="name" class="cols-sm-2 control-label">Donor Type</label>
              <div class="cols-sm-10">
                <select name="donorType" class="form-control" required">
                  <option>Select Donor Type</option>
                  <option value="Blood">Blood</option>
                  <option value="Eye">Eye</option>
                  <option value="Kidney">Kidney</option>
                </select>
              </div>
            </div>
              <div class="form-group">
                <label for="name" class="cols-sm-2 control-label">Your Name</label>
                <div class="cols-sm-10">
                 <input type="text" class="form-control" name="name" id="name" placeholder="Enter your Full Name" required />
               </div>
             </div>
             <div class="form-group">
              <label for="name" class="cols-sm-2 control-label">Age</label>
              <div class="cols-sm-10">
                <input type="text" class="form-control" name="age" id="name" placeholder="Enter your Age" required />
              </div>
            </div>
            <div class="form-group">
              <label for="name" class="cols-sm-2 control-label">Gender</label>
              <div class="cols-sm-10">
                <select name="gender" class="form-control" required">
                  <option>Select Gender</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                  <option value="Others">Others</option>
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
            <label for="name" class="cols-sm-2 control-label">Occupation</label>
            <div class="cols-sm-10">
              <select name="occupation" class="form-control" required>
                <option value="">Select Occupation</option>
                <option value="Student">Student</option>
                <option value="Service Holder">Service Holder</option>
                <option value="Dhanmondi">Others</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="name" class="cols-sm-2 control-label">How many times Blood Donation</label>
            <div class="cols-sm-10">
              <input type="text" class="form-control" name="times_blood_donation" id="name" placeholder="How many times Blood Donation" />
            </div>
          </div>
          <div class="form-group">
            <label for="name" class="cols-sm-2 control-label">Last Date Of Blood Donation</label>
            <div class="cols-sm-10">
              <input type="date" class="form-control" name="last_date_blood_donation" id="name" placeholder="Enter your Name" />
            </div>
          </div>
          <div class="form-group">
            <label for="name" class="cols-sm-2 control-label">Choosing Area</label>
            <div class="cols-sm-10">
             <select name="area" class="form-control" required>
              <option value="">Select Area</option>
              <option value="Mirpur">Mirpur</option>
              <option value="Uttara">Uttara</option>
              <option value="Dhanmondi">Dhanmondi</option>
              <option value="Gulshan">Gulshan</option>
              <option value="Banani">Banani</option>
              <option value="Mohakhali">Mohakhali</option>
              <option value="Narayangonj">Narayangonj</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="name" class="cols-sm-2 control-label">Are you want to be a life time donor?</label>
          <div class="cols-sm-10">
            <label class="control-label">Yes</label>
            <input type="radio" id="female" name="life_time" value="yes">
            <label class="control-label">No</label>
            <input type="radio" id="female" name="life_time" value="no">
          </div>
        </div>
        <div class="form-group">
          <label for="name" class="cols-sm-2 control-label">Mobile Number</label>
          <div class="cols-sm-10">
            <input type="text" class="form-control" name="mobile" id="name" placeholder="Enter your Mobile Number" required="" />
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