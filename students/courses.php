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
<?php
$query=mysql_query("SELECT courses FROM students WHERE username='$username'");
while($row=mysql_fetch_assoc($query)){
$courses=$row['courses'];
}
if($courses==""){
?>
<p class="tops">REGISTER YOUR COURSES</p>
<form method="POST" action="">
<div id="register">
<?php

if(substr($class,0,1)=="J"){
$level="junior";
}elseif(substr($class,0,1)=="S"){
$level="senior";
}

$query="SELECT * FROM subjects WHERE";
if($level=="junior"){
$query.=" level='$level'";
}elseif($level=="senior"){
$query.=" level='$level'";
}
if($sql=mysql_query($query)){
while($row=mysql_fetch_assoc($sql)){
$subj=str_replace("_"," ",$row['name']);
echo "<li><input type='checkbox' name='subject[]' value='".$row['name']."' />$subj</li>";

}

}else{
echo "<p style='color:red'>Error: ".mysql_error()." Please contact developer</p>";
}

?>

</div>



<input type="submit" class="submit" name="register" value="Register Corses" /><input class="submit" type="reset" value="Clear" />
</form>
<?php
if(isset($_POST['register'])){
$subjects="";
foreach($_POST['subject'] as $subject){
$subjects=$subject.','.$subjects;
}
if((count($_POST['subject'])<10)){
echo "<script>alert('You Must Register At Least 10 subjects')</script>";
}else{
include('connect.php');
if($subjects!=""){
$sql=mysql_query("UPDATE students SET  courses =  '$subjects' WHERE  username ='$username'");
if($sql){
echo  "<script>alert('Subjects Registered!!!')</script>";
}
}
}
}
?>

<?php
}else{
echo "<p class='tops'>SUBJECTS YOU ARE OFFERING</p>";
$course=explode(',',$courses);
echo "<ol>";
foreach($course as $subject){
if($subject!=""){
echo '<li class="subject">'.$subject.'</li><br>';
}
}
}
echo "</ol>";
?>

</div>
</div>
<?php include('footer.php'); ?>
</body>
</html>
