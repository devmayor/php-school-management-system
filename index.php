<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
if(isset($_POST['adminsubmit'])){
$adminusername=trim(addslashes($_POST['adminusername']));
$adminpassword=md5($_POST['adminpassword']);
include('connect.php');
$sql="SELECT * FROM admin WHERE username='$adminusername'";
$result=mysql_query($sql);
$row=mysql_fetch_assoc($result);
if($row['password']==$adminpassword){
session_start();
$_SESSION['adminuser']=$row;
header('location:adminhome.php');


}else{
echo "<script>alert('Wrong Username Or Password')</script>";
}

}

if(isset($_POST['teachersubmit'])){
$teacherusername=trim(addslashes($_POST['teacherusername']));
$teacherpassword=md5($_POST['teacherpassword']);
include('connect.php');
$sql="SELECT * FROM teacher WHERE username='$teacherusername'";
$result=mysql_query($sql);
$row=mysql_fetch_assoc($result);
if(($row['password']==$teacherpassword)&&($row['acess']==1)){
session_start();
$_SESSION['teacheruser']=$row;
header('location:teacher/teacherhome.php');


}else{
echo "<script>alert('Wrong Username Or Password Or You Have Not Been Allowed Acess By Admin!!!')</script>";
}

}



?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Guidance School Management</title>
<link href="css/style.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="css/slider.css" type="text/css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<script src="js/jquery-1.10.2.js"></script>
<script src="js/jquery.flexslider-min.js"></script>
<script src="js/script.js"></script>
<style>
.flex-container{
position: relative;
margin: 0 auto;
padding: 50px;
}

</style>
<script>
$(document).ready(function () {
	$('.flexslider').flexslider({
		animation: 'fade',
		controlsContainer: '.flexslider'
	});
});
</script>
</head>

<body>
<div id="header">
<img src="images/guidance.png" style="margin-top:-35px;margin-left:250px;"/>


</div>
<div id="menubar">
<center>
<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="register.php">Register</a></li>
		<li><a href="login.php">Login</a>
		<ul>
				<li id="buttonadmin"><a href="#adminlogin">Admin</a></li>
				<li id="buttonteacher"><a href="#teacherlogin">Teacher</a></li>
			</ul>
		</li>
			
		<li><a href="aboutus.php">About-Us</a></li>
		<li><a href="ourcontact.php">Our-Contacts</a></li>
</ul>
</center>

</div>
<div id="body">
<?php  include('notices.php');  ?>

<div id="centerbody">

<div class="flex-container">
	<div class="flexslider">
		<ul class="slides">
			<li>
				<a href="#"><img src="images/slide1.jpg" /></a>
			</li>
			
			<li>
				<img src="images/slide2.jpg" />
			</li>
			
			<li>
				<img src="images/slide3.jpg" />
				<p>Guidance School Management System</p>
			</li>
		</ul>
	</div>
</div>

<h3 style="text-align:center">Guidance School Management System </h3>
<p class="article">This school management system is an online school management system that runs all the major 
works in a school. From the results to the teachers, to the works etc. All of it works. </p>
<div id="admin_part">

<div id="adminlogin">
	<form method="post" action="">
	<center><label class="label">Admin Login</label></center>
	<br /><br />
		<label class="label">Username</label><br />
			<input class="input" type="text" name="adminusername" required="required" placeholder="Username" /><br />
		<label class="label">Password</label><br />
			<input class="input" type="password" name="adminpassword" required="required" placeholder="password" /><br />
			<input type="submit" class="submit1" value="Login" name="adminsubmit" />
			<input type="reset" class="submit1" value="Clear" name="clear" /><br />
		</form>	
	</div>
<div id="click_admin">
<center>
		<label class="loginlabel">Click To Login Admin</label><br /><br />
	</center>	
</div>
</div>
<div id="teacher_part">

	<div id="teacherlogin">
	<form method="post" action="">
	<center><label class="label">Teacher Login</label></center>
<br /><br />
		<label class="label">Username</label><br />
			<input class="input" type="text" name="teacherusername" required="required" placeholder="Username" /><br />
		<label class="label">Password</label><br />
			<input class="input" type="password" name="teacherpassword" required="required" placeholder="password" /><br />
			<input type="submit" class="submit1" value="Login" name="teachersubmit" />
			<input type="reset" class="submit1" value="Clear" name="clear" /><br />
		</form>	
	</div>
	<div id="click_teacher">
<center>
<label class="loginlabel">Click To Login Teacher</label>
</center>
</div>
</div>


</div>
<div id="footer">

<center>
<p>&copy; 2014 Guidance Interactive. All Rights Reserved</p>
</center>
</div>
</div>
</body>
</html>
