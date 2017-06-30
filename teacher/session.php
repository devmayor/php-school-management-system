<?php
session_start();
if(!empty($_SESSION['teacheruser'])){


if(!empty($_SESSION['teacheruser'])){
$adminuser=$_SESSION['teacheruser'];
}

}else{
header('location:../index.php');
}


?>