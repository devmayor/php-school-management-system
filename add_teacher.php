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
$sex="";
$age="";
$address="";
if(isset($_POST['submit_teacher'])){

	$surname=addslashes($_POST['surname']);
	$firstname=addslashes($_POST['firstname']);
	$othername=addslashes($_POST['othername']);
	$username=addslashes($_POST['username']);
	$email=addslashes($_POST['email']);
	$phone=addslashes($_POST['phone']);
	$sex=addslashes($_POST['sex']);
	$password=addslashes($_POST['password']);
	$age=addslashes($_POST['age']);
	$address=addslashes($_POST['address']);
	
	
	if(empty($_POST['surname'])){
	$error="enter surname";
	}elseif(empty($_POST['firstname'])){
	$error="enter firstname";
	}elseif(empty($_POST['othername'])){
	$error="enter othername";
	}elseif(empty($_POST['username'])){
	$error="enter username";
	}elseif(empty($_POST['password'])){
	$error="enter password";
	}elseif(empty($_POST['email'])){
	$error="enter email";
	}elseif(empty($_POST['phone'])){
	$error="enter phone";
	}elseif(!preg_match('/^\d{11}$/',$_POST['phone'])){
	$error="Wrong Phone No";
	}elseif(empty($_POST['sex'])){
	$error="enter sex";
	}else{
		
	include('connect.php');
	$check=mysql_query("SELECT username FROM teacher WHERE username='$username' or email='$email'");
	if(mysql_num_rows($check)==0){
	$query="INSERT INTO teacher(surname,firstname,othername,username,email,phone,sex,password,address,age) VALUES ('$surname','$firstname','$othername','$username','$email','$phone','$sex',md5('$password'),'$address','$age')";
	if(mysql_query($query)){
	echo"<script>alert('YOU HAVE SUCCESSFULLY REGISTERED A NEW TEACHER')</script>";
	//header('location:login.php');
	
	
	
	
	
	
	
	
	}else{
	$error="error registration" .mysql_error();
	}
	
	
	}else{
	$error="Username or Email Allready Exists";
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
<h2>Add Teacher</h2>
<form action="" method="POST">
<label class="label1">Surname :</label><input type="text" class="inputform" placeholder="Surname" name="surname" value="<?php if(!empty($surname)){ echo $surname;} ?>" /><br />
<label class="label1">Firstname :</label><input type="text" class="inputform" name="firstname" placeholder="Firstname" value="<?php if(!empty($firstname)){ echo $firstname;} ?>"  /><br />

<label class="label1">Othername :</label><input type="text" class="inputform"placeholder="Othername" name="othername" value="<?php if(!empty($othername)){ echo $othername;} ?>"  /><br />
<label class="label1">Username :</label><input type="text" class="inputform" placeholder="Username" name="username" value="<?php if(!empty($username)){ echo $username;} ?>"  /><br />
<label class="label1">Password :</label><input type="password" class="inputform" placeholder="Password" name="password" /><br />
<label class="label1">Email :</label><input type="email" class="inputform" placeholder="Email" name="email" value="<?php if(!empty($email)){ echo $email;} ?>" /><br />
<label class="label1">Phone :</label><input type="text" class="inputform" placeholder="Phone No" name="phone" "" value="<?php if(!empty($phone)){ echo $phone;} ?>" /><br />
<label class="label1">SEX :</label><input type="radio" name="sex" <?php if($sex=="male"){echo 'checked="checked" select="selected"' ;} ?> value="male"/>Male
<input type="radio" <?php if($sex=="female"){echo 'checked="checked" select="selected"' ;} ?> name="sex" value="female"/>Female<br />

<label class="label1">Age :</label><input type="text" class="inputform" name="age" value="<?php if(!empty($age)){ echo $age;} ?>" /><br />
<label>Address : </label><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<textarea name="address" class="textarea" rows="3" cols="40"><?php if(!empty($address)){ echo $address;} ?></textarea><br />
<input type="submit" class="submitbutton" value="submit" name="submit_teacher" />
<?php
if(!empty($error)){
echo "<p style='color:red;font-size:14px;'>Error: $error</p>";
}
?>
</form>
</div>
</div>
</div>
</body>
</html>
