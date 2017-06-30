<?php
$name=$_POST['phpuname'];
$password=$_POST['phppassword'];
include('connect.php');
$sql=mysql_query("SELECT * FROM students WHERE username='$name'");
$row=mysql_fetch_assoc($sql);
$username=$row['username'];
$pword=$row['password'];
if(mysql_num_rows($sql)==0){
echo "Username Does Not Exist!!!";
}elseif($pword=="$password"){
session_start();
$_SESSION['student']=$row;



echo"You are Logged In";

}else{
echo"Wrong Password!!!";

}

?>