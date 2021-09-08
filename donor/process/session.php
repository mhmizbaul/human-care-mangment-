<?php
include("connect.php");
session_start();
$username = $_SESSION['email'];



if(!isset($_SESSION['email'])){
    header("location: index.php");

}

?>