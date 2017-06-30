<?php
include('session.php');


?>
<?php
$surname='';
$firstname='';
$othername='';
$email='';
$phone='';
$username='';
$error="";
if(isset($_POST['submit_admin'])){
	$surname=htmlentities(addslashes(trim($_POST['surname'])));
	$firstname=htmlentities(addslashes(trim($_POST['firstname'])));
	$othername=htmlentities(addslashes(trim($_POST['othername'])));
	$username=htmlentities(addslashes(trim($_POST['username'])));
	$email=htmlentities(addslashes(trim($_POST['email'])));
	$phone=htmlentities(addslashes(trim($_POST['phone'])));
	$sex=addslashes(trim($_POST['sex']));
	$password=htmlentities(addslashes(trim($_POST['password'])));
	
	if(empty($_POST['surname'])){
	$error="enter surname";
	}elseif(empty($_POST['firstname'])){
	$error="enter firstname";
	}elseif(empty($_POST['othername'])){
	$error="enter othername";
	}elseif(empty($_POST['email'])){
	$error="enter email";
	}elseif(empty($_POST['phone'])){
	$error="enter Phone No";
	}elseif(empty($_POST['sex'])){
	$error="enter sex";
	}elseif(empty($_POST['password'])){
	$error="enter password";
	}elseif(!preg_match('/^\d{11}$/',$_POST['phone'])){
	$error="Wrong Phone No";
	}else{
		include('connect.php');
	$query1=mysql_query("SELECT username FROM admin WHERE username='$username' or email='$email'");
	
	
	if(mysql_num_rows($query1)==0){

	$query="INSERT INTO admin(surname,firstname,othername,username,email,phone,sex,password) VALUES ('$surname','$firstname','$othername','$username','$email','$phone','$sex',md5('$password'))";
	
	if(mysql_query($query)){
	echo"<script>alert('YOU HAVE SUCCESSFULLY REGISTERED NEW ADMIN')</script>";
	//header('location:login.php');
	
	
	
	
	
	
	
	
	}else{
	$error="error registration" .mysql_error();
	}
	
	}else{
	$error="Username or Email Already Exist!!!";
	}
	}

}





?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Guidance School Management</title>
<link href="css/style.css" type="text/css" rel="stylesheet">

</head>

<body>
<div id="header">
<img src="images/guidance.png" style="margin-top:-35px;margin-left:250px;"/>
<div id="logout">
<a href="logoutadmin.php"><label class="logout">Logout</label></a>
</div>
</div>
<?php include('menu.php'); ?>
<div id="body">

<?php  include('notices.php');  ?>
<?php  include('welcome.php');  ?>
<div class="mainjob">
<div class="addadmin">
<h2>Add Admin</h2>
<form action="" method="POST">
<label class="label1">Firstname :</label><input type="text" class="inputform" name="firstname" value="<?php if(!empty($firstname)){ echo $firstname;} ?>" required="required" /><br />
<label class="label1">Surname :</label><input type="text" class="inputform" name="surname" value="<?php if(!empty($surname)){ echo $surname;} ?>" required="required" /><br />
<label class="label1">Othername :</label><input type="text" class="inputform" name="othername" value="<?php if(!empty($othername)){ echo $othername;} ?>" required="required" /><br />
<label class="label1">Username :</label><input type="text" class="inputform" name="username" value="<?php if(!empty($username)){ echo $username;} ?>" required="required" /><br />
<label class="label1">Password :</label><input type="password" class="inputform" name="password" required="required" /><br />
<label class="label1">Email :</label><input type="email" class="inputform" name="email" value="<?php if(!empty($email)){ echo $email;} ?>" required="required" /><br />
<label class="label1">Phone :</label><input type="text" class="inputform" name="phone" value="<?php if(!empty($phone)){ echo $phone;} ?>" required="required" /><br />
<label class="label1">SEX :</label><input type="radio" name="sex" select="selected" checked="checked" value="male"/>Male
<input type="radio" name="sex" value="female"/>Female<br />
<input type="submit" class="submitbutton" value="submit" name="submit_admin" />
<p style="color:red"><?php if(!empty($error)){echo "Error: ". $error;} ?></p>
</form>
</div>
</div>
</div>
</body>
</html>
