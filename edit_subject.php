<?php
include('session.php');


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Guidance School Management</title>
<link href="css/style.css" type="text/css" rel="stylesheet">
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
thead td{
font-size:18px;
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

<div style="margin-left:20px;">
<h3>Update Records</h3>
<form action="" method="POST">
<table  width="90%" >
<thead style="text-align: center; color: teal; background-color: PaleTurquoise; border-radius: 15px"><td>Name</td><td>F-Term CA</td><td>F-Term Exam</td><td>S-Term CA</td><td>S-Term Exam</td><td>T-Term CA</td><td>T-Term Exam</td><td>Update</td></thead>
<tr style="text-align: center;color: teal;background-color: PaleTurquoise;border-radius: 15px">
<td>
<?php
if(isset($_GET['student_id'])&&isset($_GET['subject'])){
$student_id=base64_decode($_GET['student_id']);
$subject=base64_decode($_GET['subject']);
$id=base64_decode($_GET['id']);

$sbj=base64_encode($subject);
$ids=base64_encode($id);
}
include('connect.php');
$query="SELECT name FROM $subject WHERE student_id='$student_id'";
$sql= mysql_query($query);
if($sql){

}else{echo mysql_error();}

$row=mysql_fetch_assoc($sql);
echo"{$row['name']}";
?>
</td> 
<?php

include('connect.php');
$query2="SELECT CA_for_first,EXAM_for_first,CA_for_second,EXAM_for_second,CA_for_third,EXAM_for_third FROM $subject WHERE student_id='$student_id'";
$sql2=mysql_query($query2);
$row2=mysql_fetch_assoc($sql2)


?> 
 <td>
	<input type="text" name="f_term_ca" value="<?php echo"{$row2['CA_for_first']}"; ?>" style="width:30px"/>
 </td>
 <td>
	<input type="text" name="f_term_exam" value="<?php echo"{$row2['EXAM_for_first']}";?>" style="width:30px"/>
 </td>
 <td>
	<input type="text" name="S_term_ca" value="<?php echo"{$row2['CA_for_second']}";?>" style="width:30px"/>
 </td>
 <td>
	<input type="text" name="S_term_exam" value="<?php echo"{$row2['EXAM_for_second']}";?>" style="width:30px"/>
 </td>
 
 <td>
	<input type="text" name="T_term_ca" value="<?php echo"{$row2['CA_for_third']}";?>" style="width:30px"/>
 </td>
 <td>
	<input type="text" name="T_term_exam" value="<?php echo"{$row2['EXAM_for_third']}";?>" style="width:30px"/>
 </td>
 <td><input type="submit" value="Update" name="submit"  /></td></tr>
</table>
</form>
<?php
if(isset($_POST['submit'])){
$f_term_ca=addslashes($_POST['f_term_ca']);
$f_term_exam=addslashes($_POST['f_term_exam']);
$S_term_ca=addslashes($_POST['S_term_ca']);
$S_term_exam=addslashes($_POST['S_term_exam']);
$T_term_ca=addslashes($_POST['T_term_ca']);
$T_term_exam=addslashes($_POST['T_term_exam']);
$total_for_first=$f_term_ca + $f_term_exam;
$total_for_sec=$S_term_ca+$S_term_exam;
$total_for_third=$T_term_ca+$T_term_exam;
$overall_average=($total_for_first+$total_for_sec+$total_for_third)/3;
function test($input){
//function to test if inputs are numbers and if they are not greater than 60
$regex1='/^\d\d$/';
$regex2='/^\d$/';
if((preg_match($regex1,$input)|| preg_match($regex2,$input ))&& ($input<=60)){
return 'pos';
}else{
return 'error';
}

}
if((test($f_term_ca)=='pos')&&(test($f_term_exam)=='pos')&&(test($S_term_ca)=='pos')&&(test($S_term_exam)=='pos')&&(test($T_term_ca)=='pos')&&(test($T_term_exam)=='pos')){

$query="UPDATE $subject
SET CA_for_first='$f_term_ca',
EXAM_for_first='$f_term_exam',
total_for_first='$total_for_first',
CA_for_second='$S_term_ca',
EXAM_for_second='$S_term_exam',
total_for_second='$total_for_sec',
CA_for_third='$T_term_ca',
EXAM_for_third='$T_term_exam',
total_for_third='$total_for_third',
overall_average='$overall_average'
WHERE student_id='$student_id'" ;
if(mysql_query($query)){
echo"<script>alert('Record sucessfully Updated')</script>";

}else{
echo"Error ".mysql_error()."Please Contact Developer";
};




}else{
echo "<script>alert('Wrong Data Inputed')</script>";
}
}




?>














<?php

echo "<a href='view_subject.php?sbj=$sbj&id=$ids'><div style='border-radius:7px;background-color:teal;margin:20px;padding:5px;color:red;font-size:20px;width:100px;height:30px;'>Go Back</div></a>";
?>

</div>
</div>

</body>
</html>
