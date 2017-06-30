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
td input{
color: teal;
height:30px;
border-radius:3px;
border: 2px solid #bdc3c7;
outline: none;
padding: 3px 5px;
font-size:17px;
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
<?php
$subject=base64_decode($_GET['subject']);
$id=base64_decode($_GET['id']);
$class=base64_decode($_GET['cls']);

$sbj=base64_encode($subject);
$ids=base64_encode($id);
echo "<h3>Input Records Of $subject For $class</h3>";

$query="SELECT student_id,surname,firstname,othername FROM students WHERE class_of_admitant='$class'";
if($sql=mysql_query($query)){
$student_ids=array();
$names=array();
echo "<form method='POST' action=''>";
echo'<table  width="90%" >
<thead style="text-align: center; color: teal; background-color: PaleTurquoise; border-radius: 15px"><td>Name</td><td>F-Term CA</td><td>F-Term Exam</td><td>S-Term CA</td><td>S-Term Exam</td><td>T-Term CA</td><td>T-Term Exam</td></thead>';
$b=0;
while($row=mysql_fetch_assoc($sql)){
//collect data for all students in present class
$name=$row['surname']." ".$row['firstname']." ".$row['othername'];
$student_id=$row['student_id'];
$student_ids[]=$row['student_id'];
$names[]=$name;

$query1=mysql_query("SELECT * FROM $subject WHERE student_id='$student_id'");//loop through the students to get their record
if(mysql_num_rows($query1)==0){//check to see if there is a record of such student existing before in that subject
// if the record does not exists insert into the database
echo"<tr style='text-align: center;color: teal;background-color: PaleTurquoise;border-radius: 15px'>";
echo "<input type='hidden' name='$student_id' value='$student_id' />";
echo "<td><p>$name</p></td>
<td>
	<input type='text' name='".$student_id."f_term_ca' value='0' style='width:30px'/>
 </td>
 <td>
	<input type='text' name='".$student_id."f_term_exam' value='0' style='width:30px'/>
 </td>
 <td>
	<input type='text' name='".$student_id."S_term_ca' value='0' style='width:30px'/>
 </td>
 <td>
	<input type='text' name='".$student_id."S_term_exam' value='0' style='width:30px'/>
 </td>
 
 <td>
	<input type='text' name='".$student_id."T_term_ca' value='0' style='width:30px'/>
 </td>
 <td>
	<input type='text' name='".$student_id."T_term_exam' value='0' style='width:30px'/>
 </td>";
echo "</tr>";

}
if(mysql_num_rows($query1)>=1){
//if the record exist collect the data from the table and prepare to update
while($row=mysql_fetch_assoc($query1)){//collecting data from each students record in the subject
$CA_for_first=$row['CA_for_first'];
$EXAM_for_first=$row['EXAM_for_first'];
$CA_for_second=$row['CA_for_second'];
$EXAM_for_second=$row['EXAM_for_second'];
$CA_for_third=$row['CA_for_third'];
$EXAM_for_third=$row['EXAM_for_third'];
}
echo"<tr style='text-align: center;color: teal;background-color: PaleTurquoise;border-radius: 15px'>";
echo "<input type='hidden' name='$student_id' value='$student_id' />";
echo "<td><p>$name</p></td>
<td>
	<input type='text' name='".$student_id."f_term_ca' value='$CA_for_first' style='width:30px'/>
 </td>
 <td>
	<input type='text' name='".$student_id."f_term_exam' value='$EXAM_for_first' style='width:30px'/>
 </td>
 <td>
	<input type='text' name='".$student_id."S_term_ca' value='$CA_for_second' style='width:30px'/>
 </td>
 <td>
	<input type='text' name='".$student_id."S_term_exam' value='$EXAM_for_second' style='width:30px'/>
 </td>
 
 <td>
	<input type='text' name='".$student_id."T_term_ca' value='$CA_for_third' style='width:30px'/>
 </td>
 <td>
	<input type='text' name='".$student_id."T_term_exam' value='$EXAM_for_third' style='width:30px'/>
 </td>";
echo "</tr>";



}
$b++;
}
//completed the code for inputing records. Now to submit the record.
echo '</table><input class="submitbutton" type="submit" name="submit"  />

</form>';

}
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
//submitting data
if(isset($_POST['submit'])){

$no=count($student_ids);



for($i=0;$i<$no;$i++){
$student_id=$student_ids[$i];
$name=$names[$i];
$f_term_ca=$_POST[$student_id."f_term_ca"];
$f_term_exam=$_POST[$student_id."f_term_exam"];
$S_term_ca=$_POST[$student_id."S_term_ca"];
$S_term_exam=$_POST[$student_id."S_term_exam"];
$T_term_ca=$_POST[$student_id."T_term_ca"];
$T_term_exam=$_POST[$student_id."T_term_exam"];
$total_for_first=$f_term_ca + $f_term_exam;
$total_for_sec=$S_term_ca+$S_term_exam;
$total_for_third=$T_term_ca+$T_term_exam;
$overall_average=($total_for_first+$total_for_sec+$total_for_third)/3;


if((test($f_term_ca)=='pos')&&(test($f_term_exam)=='pos')&&(test($S_term_ca)=='pos')&&(test($S_term_exam)=='pos')&&(test($T_term_ca)=='pos')&&(test($T_term_exam)=='pos')){

$query3=mysql_query("SELECT * FROM $subject WHERE student_id='$student_id'");

if(mysql_num_rows($query3)==0){
$query4="INSERT INTO $subject(student_id,name,CA_for_first,EXAM_for_first,total_for_first,CA_for_second,EXAM_for_second,total_for_second,CA_for_third,EXAM_for_third,total_for_third,overall_average,session,class)
 VALUES 
 ('$student_id','$name','$f_term_ca','$f_term_exam',
'$total_for_first','$S_term_ca','$S_term_exam','$total_for_sec','$T_term_ca','$T_term_exam','$total_for_third','$overall_average','".SESSION."','$class')";
if(mysql_query($query4)){
echo "<p style='color:green;font-size:14px'><b>Notice:</b> Records Sucessfully Inputed For <i>$name</i></p>";
}else{
echo "Error ".mysql_error().", Please contact developer";
}

}
if(mysql_num_rows($query1)>=1){
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
echo "<p style='color:green ;font-size:14px'><b>Notice:</b> Records Sucessfully Inputed For <i>$name</i></p>";

}else{
echo"Error ".mysql_error()."Please Contact Developer";
}

}




}else{

echo "<p style='color:red ;font-size:14px'> <b>Error:</b> Wrong Data Inputed for <i>$name</i></p>";
}

}
}
echo "<a href='view_subject.php?sbj=$sbj&id=$ids'>Go Back</a>";

?>
</div>

</div>
</div>
</body>
</html>