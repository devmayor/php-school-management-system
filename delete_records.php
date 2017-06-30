<?php
include('session.php');


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Guidance School Management</title>
<link href="css/style.css" type="text/css" rel="stylesheet">
<script type="text/javascript">
function confirmation() { 
var result = confirm("Are you sure you want to delete this user?")
if (answer){  } else{ window.location = "http://www.google.com/"; }
}
</script>
<style>
th{
border-radius:5px;

}
tr{
background-color:LightBlue;
height:30px;
}
td{
font-size:16px;
text-align:center;
border-radius:5px;
}
a{
text-decoration:none;
color:green;
}
</style>
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
<h3>Super Admin</h3>
<?php
if(isset($_POST['change'])){
$session=$_POST['session'];
$sql=mysql_query("UPDATE sessions SET present='0'");
$sql1=mysql_query("UPDATE sessions SET present='1' WHERE session='$session'");
$sql2=mysql_query("UPDATE classes SET session='$session'");
if($sql && $sql1 && $sql2){
echo "<script>alert('Session Changed Successfully!!!')</script>";
 
}else{
echo mysql_error();
}
}



?>
<form action="" method="POST">
<label class='label2'>Change Session</label>
<select class="inputform" required="required" name="session">
<option value="">SELECT A SESSION</option>
<?php
$sql=mysql_query("SELECT * FROM sessions");
if($sql){
while($row=mysql_fetch_assoc($sql)){
if($row['present']==1){
echo "<option selected value='".$row['session']."'>".$row['session']."</option>";
}else{
echo "<option value='".$row['session']."'>".$row['session']."</option>";

}
}
}else{
echo mysql_error();
}
?>
</select>
<input type="submit" class='submitbutton' value="Submit" name="change" />
</form>



<form action="" method="POST">
<h3>Move Students From First Class </h3>

<select class="inputform" required="required" name="class1">
<option value="">SELECT FIRST CLASS</option>
<?php
$sql=mysql_query("SELECT * FROM classes");

while($row=mysql_fetch_assoc($sql)){
echo "<option value='".$row['class_name']."'>".$row['class_name']."</option>";


}


?>
</select>

<input type="submit" class='submitbutton' value="Submit" name="move" />
</form>
<?php
$show1="no";
if(isset($_POST['move'])){
if(!empty($_POST['class1'])){
$class1=$_POST['class1'];
$query1=mysql_query("SELECT student_id,surname,firstname,othername FROM students WHERE class_of_admitant='$class1'");
if(mysql_num_rows($query1)>0){
echo "<form action='' method='get'>";
while($row=mysql_fetch_assoc($query1)){
$name=$row['surname']." ".$row['firstname']." ".$row['othername'];
echo "<div style='width:30%; height:50px; float:left;'><input type='checkbox' checked value='".base64_encode($row['student_id'])."' name='students[]' /> $name </div>";
$show1="no";
}
echo"<br/><br /><br /><h3>Move Students To Another Class</h3>";

echo'<select class="inputform" required="required" name="class2">';
echo"<option value=''>SELECT SECOND CLASS</option>";

$sql=mysql_query("SELECT * FROM classes");

while($row=mysql_fetch_assoc($sql)){
echo "<option value='".$row['class_name']."'>".$row['class_name']."</option>";


}



echo"</select>";

echo'<input type="submit" class="submitbutton" value="Submit" name="move2" />';

echo"</form>";
}else{
$error="No Student In $class1";
}

}else{
$error="Empty Class. Please Select A Class.";
}

}
if(isset($_GET['move2'])){
$class2=$_GET['class2'];
foreach($_GET['students'] as $std){
$std=base64_decode($std);
if($query2=mysql_query("UPDATE students SET class_of_admitant='$class2' WHERE student_id='$std'")){
echo "<p style='color:green;font-size:13px;'>$std Was Sucessfully Moved </p>";
}else{
$error=mysql_error();
}
}



}
?>
<?php
if(!empty($error)){
echo "<p style='color:red'>$error</p>";
}
if($show1=="yes"){
?>
<br /><br /><br /><br />
<form action="" method="POST">
<h3>Move Students To Another Class</h3>

<select class="inputform" required="required" name="class2">
<option value="">SELECT SECOND CLASS</option>
<?php
$sql=mysql_query("SELECT * FROM classes");

while($row=mysql_fetch_assoc($sql)){
echo "<option value='".$row['class_name']."'>".$row['class_name']."</option>";


}


?>
</select>

<input type="submit" class='submitbutton' value="Submit" name="move2" />
</form>
<?php
}


?>

</div>
</body>
</html>
