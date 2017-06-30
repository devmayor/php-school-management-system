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

<h4>Scores For <?php echo $subj." ".SESSION." Session For ".$class; ?></h4>
<table class='ttable'  width="97%" >
<thead style="text-align: center; color: teal; background-color: PaleTurquoise; border-radius: 15px"><td>Name</td><td>F-Term CA</td><td>F-Term Exam</td><td>F-Term Total</td><td>S-Term CA</td><td>S-Term Exam</td><td>S-Term Total</td><td>T-Term CA</td><td>T-Term Exam</td><td>T-Term Total</td><td>Overall Average</td><td>Grade</td></thead>

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
<td>{$row4['CA_for_third']}</td><td>{$row4['EXAM_for_third']}</td><td>{$row4['total_for_third']}</td><td>{$row4['overall_average']}</td><td>$grade</td></tr>";
}else{
$student_id=base64_encode($row4['student_id']);
echo"<tr style='text-align: center;color: teal;background-color:PaleTurquoise ;border-radius: 15px'><td>{$row4['name']}</td><td>{$row4['CA_for_first']}</td><td>{$row4['EXAM_for_first']}</td><td>{$row4['total_for_first']}</td><td>{$row4['CA_for_second']}</td><td>{$row4['EXAM_for_second']}</td><td>{$row4['total_for_second']}</td>
<td>{$row4['CA_for_third']}</td><td>{$row4['EXAM_for_third']}</td><td>{$row4['total_for_third']}</td><td>{$row4['overall_average']}</td><td>$grade</td></tr>";

}
}
}else{
echo"No Record";
}

?>
</table>
<?php
echo "<a href='viewclass.php?C=".base64_encode($class)."&id=".$_GET['id']."' style='float:right;margin-right:30px;'>Go Back</a>";

?>
</div>



</div>
</div>
</div>
</body>
</html>
