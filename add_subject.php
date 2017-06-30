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
<h3>Add Subjects</h3>
<?php
$error="";
$error1="";
$error2="";
$color="red";
$color2="red";
$color1="pink";
$subject="";
if(isset($_POST['submit'])){
include('connect.php');
$subj=addslashes(trim($_POST['subject']));
$subject = str_replace(' ', '_', $subj);
$teacher=addslashes(trim($_POST['teacher']));
$level=addslashes(trim($_POST['class']));
$query3="SELECT id FROM subjects WHERE name='$subject' and level='$level'";
$sql4=mysql_query($query3);

if(empty($subject) || empty($teacher) || empty($level)){
$error="Teacher Field Or Subject Or Secondary Level Field Is Empty";
}elseif(mysql_num_rows($sql4)>0){
$error2="This Subject Already Exists For This Level. Check The List Of Subject Available";

}else{
//check if teacher is assigned to a class before
$query="SELECT * From subjects WHERE teacher='$teacher'";
$sql=mysql_query($query);
if(mysql_num_rows($sql)>0){
$error1="Note $teacher is allready assigned to a subject!!!";
$color='yellow';
}

$query1="INSERT INTO subjects (name,teacher,level,session) VALUES ('$subject','$teacher','$level','".YEAR."')";
$query2="CREATE TABLE  school.$subject (
`no` INT( 5 ) NOT NULL AUTO_INCREMENT ,
 `student_id` VARCHAR( 30 ) NOT NULL ,
 `name` VARCHAR( 50 ) NOT NULL ,
 `CA_for_first` INT( 5 ) NOT NULL ,
 `EXAM_for_first` INT( 5 ) NOT NULL ,
 `total_for_first` INT( 11 ) NOT NULL ,
 `CA_for_second` INT( 11 ) NOT NULL ,
 `EXAM_for_second` INT( 11 ) NOT NULL ,
 `total_for_second` INT( 11 ) NOT NULL ,
 `CA_for_third` INT( 11 ) NOT NULL ,
 `EXAM_for_third` INT( 11 ) NOT NULL ,
 `total_for_third` INT( 11 ) NOT NULL ,
 `overall_average` INT( 11 ) NOT NULL ,
 `session` INT(50) NOT NULL ,
 `class` INT(50) NOT NULL ,
PRIMARY KEY (  `no` ) ,
UNIQUE KEY  `no` (  `no` )
) ENGINE = INNODB DEFAULT CHARSET = latin1;

";
if(mysql_query($query2)){
if(mysql_query($query1)){
$error="Subject Added";
$color="Green";
echo "<script>alert('Subject Successfully Added!!!')</script>";
}else{
$error1="Subject Not Created".mysql_error();
}
}else{
$error1="Subject Not Added!!!".mysql_error();
}

}
}


?>
<form method="POST" action="">
<label class="label2">Name Of Subject:</label>
<input type="text" class="inputform" name="subject" value="<?php if(!empty($subject)){echo $subject;} ?>" required="required" /><br>
<label class="label2">Subject Teacher:</label>
<select name="teacher" class="inputform">
<option selected value="">----------Assign A Teacher------------</option>
<?php
//collecting teachers
$sql=mysql_query("SELECT id,surname,firstname,username,othername FROM teacher ");
while($row=mysql_fetch_assoc($sql)){
echo "<option value='".$row['username']."'>".$row['surname']." ".$row['firstname']." ".$row['othername']."</option>";
}

?>


</select><br>
<label class="label2">Class Level:</label><input type="radio" name="class" value="senior" />Senior Secondary<input type="radio" name="class" value="junior" />
Junior Secondary
<br>
<input type="submit" name="submit" class="submitbutton" Value="Submit" /><br>

<span style="color:<?php echo $color; ?>;"><?php echo $error; ?></span><br>
<span style="color:<?php echo $color1; ?>;"><?php if(!empty($error1)){echo "Error:".$error1;} ?></span>
<span style="color:<?php echo $color2; ?>;"><?php if(!empty($error2)){echo "Error:".$error2;} ?></span>
</form>
</div>
</div>

</body>
</html>
