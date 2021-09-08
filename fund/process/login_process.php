<?php
  include('../connect.php');

if(isset($_POST['username']) && ($_POST['password'])){

  $username = $_POST['username'];
  $password = $_POST['password'];
  //$employee_password_md5 = md5($employee_password);

  $login_query = "SELECT * FROM evergreen_fund WHERE email = '$username' && password = '$password'  LIMIT 1";
  $login = mysqli_query($con,$login_query);

  $count = mysqli_num_rows($login);


  if($count == 1){

    $row= mysqli_fetch_assoc($login);
    $username = $row['email'];

   
    header("location: ../dashboard.php");
    //echo "successfully logged in";
    session_start();
    
    $_SESSION['email'] = $username;

     
    exit();


  }
  else{
      echo "<script> alert(' Incorrect information, try again !!') </script>";
      echo "<script> window.open('../index.php','_self'); </script>";
    }

}
?>         