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
$class="";
$teacher="";
$optional="";
if(isset($_POST['submit'])){
$class=addslashes(trim($_POST['class']));
$optional=addslashes(trim($_POST['class_option']));
$teacher=addslashes(trim($_POST['teacher']));

if(!empty($_POST['subject'])){
$subject=array();
$subject=$_POST['subject'];
}

if(!empty($class)){
	if(!empty($teacher)){
			if(!empty($subject) && (count($subject)>8)){
			$optional=ucfirst($optional);
			$tclass=$class." ".$optional;
			$no=count($subject);
			$subjects="";
			foreach($subject as $subj){
			$subjects=$subjects.",".$subj;
			}
			$subjects=substr($subjects,1);
			//echo $subjects;
			$query2="INSERT INTO classes (class_name,subjects,no_of_subjects,class_teacher,session) VALUES ('$tclass','$subjects','$no','$teacher','".SESSION."')";
			$tf= str_replace(" ","_",$tclass."_first_term_broad_sheet");
			$ts= str_replace(" ","_",$tclass."_second_term_broad_sheet");
			$tt= str_replace(" ","_",$tclass."_third_term_broad_sheet");
			$sbjs="";
			foreach($subject as $sbj){
			$sbjs=$sbjs."`$sbj` int( 5  )  NOT  NULL ,";
			}
			$query3="
 CREATE  TABLE  `school`.`$tf` (  `s/n` int( 5  )  NOT  NULL  AUTO_INCREMENT ,
 `student_id` varchar( 50 ) NOT NULL ,
 `name` varchar( 50  )  NOT  NULL ,".$sbjs." 
 `total_marks` int( 5  )  NOT  NULL ,
 `percentage` float( 10, 2  )  NOT  NULL ,
 `position` int( 20  )  DEFAULT NULL ,
 `session` varchar(20)  DEFAULT NULL ,
 PRIMARY  KEY (  `s/n`  )  ) ENGINE  = InnoDB  DEFAULT CHARSET  = latin1";//creating first term broadsheet
 
 $query4="
 CREATE  TABLE  `school`.`$ts` (  `s/n` int( 5  )  NOT  NULL  AUTO_INCREMENT ,
 `student_id` varchar( 50 ) NOT NULL ,
 `name` varchar( 50  )  NOT  NULL ,".$sbjs." 
 `total_marks` int( 5  )  NOT  NULL ,
 `total_for_first` int( 5  )  NOT  NULL ,
 `percentage` float( 10, 2  )  NOT  NULL ,
 `position` int( 20  )  DEFAULT NULL ,
 `session` varchar(20)  DEFAULT NULL ,
 PRIMARY  KEY (  `s/n`  )  ) ENGINE  = InnoDB  DEFAULT CHARSET  = latin1";//creating second term broadsheet
 
 $query5="CREATE TABLE `school`.`$tt` ( `s/n` int( 5 ) NOT NULL AUTO_INCREMENT ,
`student_id` varchar( 50 ) NOT NULL ,
`name` varchar( 50 ) NOT NULL ,".$sbjs."
`first_term_score` int( 10 ) NOT NULL ,
`second_term_score` int( 10 ) NOT NULL ,
`third_term_score` int( 10 ) NOT NULL ,
`total_average` int( 10 ) NOT NULL ,
`percentage` float( 10, 2 ) NOT NULL ,
`position` varchar(20) DEFAULT NULL ,
`session` varchar(20)  DEFAULT NULL ,
PRIMARY KEY ( `s/n` ) ) ENGINE = InnoDB DEFAULT CHARSET = latin1";

			if(mysql_query($query2) && mysql_query($query3) && mysql_query($query4) && mysql_query($query5)){
			echo "<script>alert('".$tclass." Has Been Successfully Created!!')</script>";
			}else{
			echo "<p style='color:red'>Error: ".mysql_error()." Please contact developer!!!</P>";
			}
			}else{
		echo "<script>alert('Please Select At Least 8 Subject For This Class')</script>";
		}
	}else{
	echo "<script>alert('Please Select A Class Teacher')</script>";
	}
}else{
echo "<script>alert('Please Input A Class')</script>";
}

}
?>
<h3>Register Class</h3>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<label class="label2">Name Of Class:</label>
<select style="width:220px;" class="inputform" name="class">
<option value="">-----Select A CLass----</option>
<option <?php if($class=="JSS1"){echo "selected";}?> value="JSS1">JSS1</option>
<option <?php if($class=="JSS2"){echo "selected";} ?> value="JSS2">JSS2</option>
<option <?php if($class=="JSS3"){echo "selected";} ?> value="JSS3">JSS3</option>
<option <?php if($class=="SS1"){echo "selected";} ?> value="SS1">SS1</option>
<option <?php if($class=="SS2"){echo "selected";} ?> value="SS2">SS2</option>
<option <?php if($class=="SS3"){echo "selected";} ?> value="SS3">SS3</option>
</select>
<input type="text" class="inputform" name="class_option" value="<?php if(!empty($optional)){echo $optional;} ?>" /><br>
<label class="label2">Class Teacher:</label>
<select name="teacher" class="inputform" style="width:220px;">
<option value="">----Select Class Teacher----</option>
<?php
include('connect.php');
$query1="SELECT surname,firstname,othername,username FROM teacher";
$sql=mysql_query($query1);
while($row=mysql_fetch_assoc($sql)){
if($teacher==$row['username']){
echo "<option selected value='".$row['username']."'>".$row['surname']." ".$row['firstname']." ".$row['othername']."</option>";
}else{
echo "<option value='".$row['username']."'>".$row['surname']." ".$row['firstname']." ".$row['othername']."</option>";

}
}
?>
</select>

<h4>Register Subjects For Class</h4>
<fieldset style="width:90%;" class="fieldset">
<legend>Senior Secondary Subjects</legend>
<?php

$query="SELECT * FROM subjects WHERE session='".SESSION."' and level='senior' ";
$sql=mysql_query($query);
while($row=mysql_fetch_assoc($sql)){
$subj=str_replace('_',' ',$row['name']);
echo "<div style='width:25%;height:70px;float:left;'>";
echo "<input type='checkbox' name='subject[]' value='".$row['name']."' />";
echo " $subj ";

echo "</div>";
}

?>
</fieldset>
<fieldset style="width:90%;" class="fieldset">
<legend>Junior Secondary Subjects</legend>
<?php
include('connect.php');
$query="SELECT * FROM subjects WHERE session='".SESSION."' and level='junior' ";
$sql=mysql_query($query);
while($row=mysql_fetch_assoc($sql)){
$subj=str_replace('_',' ',$row['name']);
echo "<div style='width:25%;height:70px;float:left;'>";
echo "<input type='checkbox' name='subject[]' value='".$row['name']."' />";
echo " $subj ";

echo "</div>";
}

?>
</fieldset>

<input type="submit" name="submit" Value="Register" class="submitbutton" />
<form>
</div>
</div>

</body>
</html>
