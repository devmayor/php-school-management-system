<?php
include('session.php');


?>


<?php
$title="<title>Guidance School Management</title>";
include('header.php');
include('menu.php');
?>
<div id="body">

<?php  include('notices.php');  ?>
<?php  include('welcome.php');  ?>
<div class="mainjob">
<?php
include('leftbar.php');
?>

<div class="rightbar">
<?php
$subject=base64_decode($_GET['sbj']);
$id=base64_decode($_GET['id']);

$subj=str_replace('_', ' ', $subject);	

$sbj=base64_encode($subject);
$ids=base64_encode($id);


$query="SELECT class_name FROM classes WHERE id='$id'";
if($sql=mysql_query($query)){

while($row=mysql_fetch_assoc($sql)){
$class=$row['class_name'];
}
}else{
echo mysql_error();
}

?>

<center><h2><?php echo $subj; ?></h2></center>

<div style="margin-left:20px;">

<h3>Scores For <?php echo $subj." ".SESSION." Session For ".$class; ?></h3>
<table class="ttable"  width="97%" >
<thead style="text-align: center; color: teal; background-color: PaleTurquoise; border-radius: 15px"><td>Name</td><td>F-Term CA</td><td>F-Term Exam</td><td>F-Term Total</td><td>S-Term CA</td><td>S-Term Exam</td><td>S-Term Total</td><td>T-Term CA</td><td>T-Term Exam</td><td>T-Term Total</td><td>Overall Average</td><td>Grade</td><td>&nbsp;Edit&nbsp;/&nbsp;Delete&nbsp;</td></thead>

<?php
include('connect.php');
$query4="SELECT * FROM ".$subject." WHERE class='".$class."' and session='".SESSION."'ORDER BY overall_average DESC";
if($result4=mysql_query($query4)){
while($row4=mysql_fetch_assoc($result4)){
if($row4['overall_average']>=75){
$grade="A1";
$remark="Excellent";
}elseif($row4['overall_average']>=70){
$grade="B2";
$remark="V.Good";
}elseif($row4['overall_average']>=65){
$grade="B3";
$remark="Good";
}elseif($row4['overall_average']>=60){
$grade="C4";
$remark="Credit";
}elseif($row4['overall_average']>=55){
$grade="C5";
$remark="Credit";
}elseif($row4['overall_average']>=50){
$grade="C6";
$remark="Credit";
}elseif($row4['overall_average']>=45){
$grade="D7";
$remark="Pass";
}elseif($row4['overall_average']>=40){
$grade="D8";
$remark="Pass";
}elseif($row4['overall_average']<40){
$grade="F9";
$remark="Fail";
}

if($grade=="F9"){
$student_id=base64_encode($row4['student_id']);
echo"<tr style='text-align: center;color: teal;background-color: pink;border-radius: 15px'><td>{$row4['name']}</td><td>{$row4['CA_for_first']}</td><td>{$row4['EXAM_for_first']}</td><td>{$row4['total_for_first']}</td><td>{$row4['CA_for_second']}</td><td>{$row4['EXAM_for_second']}</td><td>{$row4['total_for_second']}</td>
<td>{$row4['CA_for_third']}</td><td>{$row4['EXAM_for_third']}</td><td>{$row4['total_for_third']}</td><td>{$row4['overall_average']}</td><td>$grade</td><td><a href='edit_subject.php?student_id={$student_id}&subject=$sbj&id=$ids'><img src='../images/b_edit.png' alt='Edit' \></a>&nbsp;&nbsp;&nbsp;<a href='delete_subject.php?student_id={$student_id}&subject=$sbj&id=$ids'><img src='../images/b_drop.png' alt='Delete' \></a></td></tr>";
}else{
$student_id=base64_encode($row4['student_id']);
echo"<tr style='text-align: center;color: teal;background-color:PaleTurquoise ;border-radius: 15px'><td>{$row4['name']}</td><td>{$row4['CA_for_first']}</td><td>{$row4['EXAM_for_first']}</td><td>{$row4['total_for_first']}</td><td>{$row4['CA_for_second']}</td><td>{$row4['EXAM_for_second']}</td><td>{$row4['total_for_second']}</td>
<td>{$row4['CA_for_third']}</td><td>{$row4['EXAM_for_third']}</td><td>{$row4['total_for_third']}</td><td>{$row4['overall_average']}</td><td>$grade</td><td><a href='edit_subject.php?student_id={$student_id}&subject=$sbj&id=$ids'><img src='../images/b_edit.png' alt='Edit' \></a>&nbsp;&nbsp;&nbsp;<a href='delete_subject.php?student_id={$student_id}&subject=$sbj&id=$ids'><img src='../images/b_drop.png' alt='Delete' \></a></td></tr>";

}
}
}else{
echo"No Record";
}

?>
</table>

</div>


<div style="margin-left:20px;">
<h3>Add Records For <?php echo $class ?></h3>
<form action="" method="POST">
<table class="ttable"  width="90%" >
<thead style="text-align: center; color: teal; background-color: PaleTurquoise; border-radius: 15px"><td>Name</td><td>F-Term CA</td><td>F-Term Exam</td><td>S-Term CA</td><td>S-Term Exam</td><td>T-Term CA</td><td>T-Term Exam</td><td>Submit</td></thead>
<tr style="text-align: center;color: teal;background-color: PaleTurquoise;border-radius: 15px">
<td>
<select name="select" style="width:120px">
<option value="">Select Student</option>
<?php
include('connect.php');
$query1="SELECT surname,firstname,othername,student_id FROM students WHERE class_of_admitant='$class'";
if($result=mysql_query($query1)){
while($row=mysql_fetch_assoc($result)){
$student_id=$row['student_id'];
$name=$row['surname']." ".$row['firstname']." ".$row['othername'];
echo"<option value='$student_id'>$name</option>";
}

}
?>
</select>
</td>  
 <td>
	<input type="text" name="f_term_ca" value="0" style="width:30px"/>
 </td>
 <td>
	<input type="text" name="f_term_exam" value="0" style="width:30px"/>
 </td>
 <td>
	<input type="text" name="S_term_ca" value="0" style="width:30px"/>
 </td>
 <td>
	<input type="text" name="S_term_exam" value="0" style="width:30px"/>
 </td>
 
 <td>
	<input type="text" name="T_term_ca" value="0" style="width:30px"/>
 </td>
 <td>
	<input type="text" name="T_term_exam" value="0" style="width:30px"/>
 </td>
 <td><input type="submit" name="submit"  /></td></tr>
</table>
</form>
<?php
if(isset($_POST['submit'])){

$student_id=addslashes($_POST['select']);



$query1="SELECT surname,firstname,othername,student_id FROM students WHERE student_id='$student_id'";
if($result=mysql_query($query1)){
while($row=mysql_fetch_assoc($result)){
$student_name=$row['surname']." ".$row['firstname']." ".$row['othername'];
}
}


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

//if((!preg_match($regex,$f_term_ca)) || (!preg_match($regex,$f_term_exam)) || (!preg_match($regex,$S_term_ca)) || (!preg_match($regex,$S_term_exam)) || (!preg_match($regex,$T_term_ca)) || (!preg_match($regex,$T_term_exam))){
//$error="yes";
//}else{
//$error="no";
//}

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




if(empty($student_id)){
echo"<script>alert('Error, No Record Was Inserted')</script>";
}else{

include('connect.php');


$query3="INSERT INTO $subject(student_id,name,CA_for_first,EXAM_for_first,total_for_first,CA_for_second,EXAM_for_second,total_for_second,CA_for_third,EXAM_for_third,total_for_third,overall_average,session,class)
 VALUES 
 ('$student_id','$student_name','$f_term_ca','$f_term_exam',
'$total_for_first','$S_term_ca','$S_term_exam','$total_for_sec','$T_term_ca','$T_term_exam','$total_for_third','$overall_average','".SESSION."','$class')";

if($result3=mysql_query($query3)){
echo"<script>alert('New Record Inputed Sucessfully')</script>";
}else{
if(mysql_error()=="Duplicate entry '$student_id' for key 'PRIMARY'"){
echo "<script>alert('Duplicate Entry!!!')</script>";
}
}
}
}else{
echo "<script>alert('Wrong Data Inputed')</script>";
}
}
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//echo "<h3>Add Record To $class In Mass</h3>";
$c=base64_encode($class);
echo "<a href='record.php?subject=$sbj&id=$ids&cls=$c' >Click To Input Records In Mass</a>";
//echo "<a href='subject_classes.php?C=".base64_encode($class)."&id=".$_GET['id']."' style='float:right;margin-right:30px;'>Go Back</a>";

?>
</div>
</div>

</div>
</div>
</body>
</html>
