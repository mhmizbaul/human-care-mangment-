<?php
include("connect.php");
session_start();
$username = $_SESSION['u_id'];



if(!isset($_SESSION['u_id'])){
    header("location: index.php");

}

?>