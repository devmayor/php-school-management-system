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
<?php
$show="yes";
$class=base64_decode($_GET['C']);
if(isset($_POST['change'])){
$teacher=$_POST['teacher'];
$query3=mysql_query("UPDATE classes SET class_teacher='$teacher' WHERE class_name='$class'");
if($query3){
echo "<script>alert('Class Teacher Changed')</script>";
echo "<p style='color:green;font-size:13px;'>Class Teacher Of $class Has Been Successfully Changed To $teacher</p>";
$show="no";
}

}
echo'<a href="viewclass.php?C='.$_GET['C'].'&id='.$_GET['id'].'" style="float:right;"> Go Back </a>';

if($show=="yes"){
?>

<form action="" method="POST">
<h4>Change Class Teacher</h4>
<select name="teacher" class="inputform">
<?php

$query=mysql_query("SELECT surname,firstname,othername,username FROM teacher");
$query2=mysql_query("SELECT class_teacher,class_name FROM classes WHERE class_name='$class'");
$rlt=mysql_fetch_assoc($query2);
while($row=mysql_fetch_assoc($query)){
$teacher=$row['username'];
$name=$row['surname']." ".$row['firstname']." ".$row['othername'];

if($rlt['class_teacher']==$teacher){
echo "<option selected value='".$teacher."'>".$name."</option>";
}else{
echo "<option value='".$teacher."'>".$name."</option>";

}
}

?>
</select>
<input type="submit" name="change" value="Change" class="submitbutton"/>
</form>
<?php
}
?>

</div>
</div>

</body>
</html>
