 <?php
include('session.php');


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Guidance School Management</title>
<link href="css/style.css" type="text/css" rel="stylesheet">

</head>

<body>
<div id="header"><img src="images/guidance.png" style="margin-top:-35px;margin-left:250px;"/><div id="logout">
<a href="logoutadmin.php"><label class="logout">Logout</label></a>
</div>
</div>
<?php include('menu.php'); ?>
<div id="body">
<?php  include('notices.php');  ?>
<?php  include('welcome.php');  ?>
<div class="mainjob">

<center>

<?php

if(isset($_GET['username'])){
$username=base64_decode($_GET['username']);
include('connect.php');
$sql=mysql_query("SELECT * FROM teacher WHERE username='$username'");
$result=mysql_fetch_assoc($sql);
$surname=$result['surname'];
$firstname=$result['firstname'];
$othername=$result['othername'];
$phone=$result['phone'];
$email=$result['email'];
$sex=$result['sex'];
$address=$result['address'];
$age=$result['age'];
$acess=$result['acess'];
$password=$result['password'];
echo"<h3>Teacher: $username</h3>";

if(isset($_POST['submit'])){
$new_surname=$_POST['surname'];
$new_firstname=$_POST['firstname'];
$new_othername=$_POST['othername'];
$new_phone=$_POST['phone'];
$new_email=$_POST['email'];
$new_address=$_POST['address'];
$new_sex=$_POST['sex'];
$new_age=$_POST['age'];
$new_acess=$_POST['acess'];

if(($new_surname!="") && ($new_firstname!="") && ($new_othername!="") && ($new_phone!="") && ($new_email!="") && ($new_address!="") && ($new_sex!="") && ($new_age!="") && ($new_acess!="")){
$sql="UPDATE teacher SET
surname='$new_surname',
firstname='$new_firstname',
othername='$new_othername',
phone='$new_phone',
email='$new_email',
class='',
address='$new_address',
sex='$new_sex',
age='$new_age',
acess='$new_acess' WHERE username='$username' ";
if(mysql_query($sql)){

echo"<script>alert('Teachers Record Updated!!!')</script>";
}else{
echo "error".mysql_error();
}
}else{
echo"<script>alert('A Filled Is Empty')</script>";
}


}

}
?>
<form action="" method="post">
<table border="2" style="margin:10px;" bordercolor="teal" width="50%">
<tr><td>Surname</td><td><input type="text" name="surname" value="<?php echo $surname; ?>" /></td></tr>
<tr><td>Firstname</td><td><input type="text" name="firstname" value="<?php echo $firstname; ?>" /></td></tr>
<tr><td>Othername</td><td><input type="text" name="othername" value="<?php echo $othername; ?>" /></td></tr>
<tr><td>Phone</td><td><input type="text" name="phone" value="<?php echo $phone; ?>" /></td></tr>
<tr><td>Email</td><td><input type="email" name="email" value="<?php echo $email; ?>" /></td></tr>
<tr><td>Address</td><td><input type="text" name="address" value="<?php echo $address; ?>" /></td></tr>
<tr><td>Sex</td><td><?php
if($sex=="male"){
echo"<input type='radio' name='sex' select='selected' checked='checked' value='male'/>Male
<input type='radio' name='sex' value='female'/>Female</td>";
}elseif($sex=="female"){
echo"<input type='radio' name='sex'  value='male'/>Male
<input type='radio' select='selected' checked='checked' name='sex' value='female'/>Female</td>";
}
?></td></tr>
<tr><td>Age</td><td><input type="text" name="age" value="<?php echo $age; ?>" /></td></tr>
<tr><td>Acess</td><td>
<?php
if($acess=="1"){
echo"<input type='radio' name='acess' select='selected' checked='checked' value='1'/>Allowed
<input type='radio' name='acess' value='0'/>Not Allowed</td>";
}elseif($acess=="0"){
echo"<input type='radio' name='acess'  value='1'/>Allowed
<input type='radio' select='selected' checked='checked' name='acess' value='0'/>Not Allowed</td>";
}

?>
</td>
<tr><td colspan="2"><input type="submit" value="Update" name="submit" /></td></tr>
</tr>

</table>
<a href="manage_teachers.php">Go Back</a>
</form>
</center>
</div>
</div>

</body>
</html>
