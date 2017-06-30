<?php
session_start();
session_unset();
session_destroy();
echo "<script type='text/javascript'>alert('You have Successfully Logout');";
header("location:../index.php");
?>