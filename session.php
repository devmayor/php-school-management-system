<?php
session_start();
if(!empty($_SESSION['adminuser'])){

if(!empty($_SESSION['adminuser'])){
$adminuser=$_SESSION['adminuser'];
}

}else{
header('location:index.php');
}


?>