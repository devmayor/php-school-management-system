<?php
include('session.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Guidance School Management</title>
<link href="css/style.css" type="text/css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<script src="js/jquery-1.10.2.js"></script>
<script src="js/script.js"></script>
</head>
<body>
<?php include('header.php'); ?>
<?php include('main1.php'); ?>
<?php include('scroll.php'); ?>
<div id="body">
<?php include('menu.php'); ?>
<div id="work">
<p class="tops">CHANGE PASSWORD</p>
<form method="POST" action="">
<label class="label1">Old Password :</label><input class="inputform" type="password" name="old_password" required="required" /><br />
<label class="label1">New Password :</label><input class="inputform" type="password" name="new_password" required="required" /><br />
<label class="label1">Confirm Password :</label><input class="inputform" type="password" name="confirm_password" required="required" /><br />
<input type="submit" class="submit" name="submit" value="Change Password"/>
</form>
<?php
if(isset($_POST['submit'])){
$oldpassword=trim($_POST['old_password']);
$newpassword=trim($_POST['new_password']);
$confirmpassword=trim($_POST['confirm_password']);
if(($oldpassword!="")&&($newpassword!="")&&($confirmpassword!="")){
if($newpassword==$confirmpassword){
include('connect.php');
$username=$student['username'];
$query=mysql_query("SELECT password FROM students WHERE username='$username'");
$sql=mysql_fetch_assoc($query);
$password=$sql['password'];
if($oldpassword==$password){
$update=mysql_query("UPDATE students SET password='$confirmpassword' WHERE username='$username'");
if($update){
echo"<script>alert('Password Successfully Changed!!!')</script>";
}else{
echo mysql.error();
}
}else{
echo"<script>alert('Your Old Password Is Incorrect!!!')</script>";
}


}else{
echo"New And Confirm Password Does Not Match";
echo"<script>alert('New And Confirm Password Does Not Match!!!')</script>";
}
}else{
echo"All Fields Are Required";
}

}

?>
</div>

</div>
</div>
<?php include('footer.php'); ?>
</body>
</html>
