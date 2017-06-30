<?php
session_start();
if(!empty($_SESSION['student'])){

$student=$_SESSION['student'];
}else{
header('location:login.php');
}


?>
