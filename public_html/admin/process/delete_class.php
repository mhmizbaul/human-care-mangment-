<?php 
	include('../connect.php');
	if(isset($_GET['classid'])){
		$id = $_GET['classid'];
		$i = mysqli_query($con,"DELETE FROM class WHERE id = '$id'");
		  	if($i==1){
    
            echo "<script> alert(' Successfully Deleted, Class Name: $name !!') </script>";
    		echo "<script> window.open('../add_class.php','_self'); </script>";
    }
    
    else{
       echo "<script> alert(' Failed, try again !!') </script>";
    //	echo "<script> window.open('../add_teacher.php','_self'); </script>";
    }
		
	}
?>