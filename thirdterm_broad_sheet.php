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
width:100px;
height:60px;
}
tr{
font-size:12px;
height:40px;
overflow:auto;
background-color:LightBlue;
}
td{
text-align:center;
border-radius:5px;
}
a{
text-decoration:none;
color:green;
}
thead td{
/*min-width:50px;*/
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

$class=base64_decode($_GET['C']);
$id=base64_decode($_GET['id']);
echo "<center><h3>$class third Term Broad Sheet</h3></center>";
echo"<center><table style='width:99%'  cellspacing='1'>";
$query="SELECT subjects FROM classes WHERE id='$id' and session='".SESSION."'";// collecting subjects offered by class
$sql=mysql_query($query);
$subjects="";
while($row=mysql_fetch_assoc($sql)){
$subjects=$row['subjects'];//all the subjects saved in a variable
}
$subjects= explode(',' , $subjects);// variable is exploded to get a array of each subjects

$query2=mysql_query("SELECT student_id,surname,firstname,othername FROM students WHERE class_of_admitant='$class'"); // collecting all the students in this particular class
$nos=mysql_num_rows($query2);//get the number of students

while($row=mysql_fetch_assoc($query2)){
$student_ids[]=$row['student_id'];// each student's id saved in an array
$name=$row['surname']." ".$row['firstname']." ".$row['othername'];
$names[]=$name; //each students name saved in an array
}

@$n=count($student_ids);


for($i=0;$i<$n;$i++){ //using the data from both arrays of student id and names to get the value from each subject

$z=$i+1;

$names[$i];
$total=0;
$ftotal=0;
$stotal=0;
$no=0;
$subjs="";
$values="";
foreach($subjects as $subj){
$subjs.=$subj.",";

$query7=mysql_query("SELECT total_for_third,total_for_second,total_for_first FROM $subj WHERE student_id='$student_ids[$i]' and class='$class'");

if($query7){
$row=mysql_fetch_assoc($query7);
}
if(isset($row['total_for_third'])){

$total=$row['total_for_third']+$total;
$ftotal=$row['total_for_first']+$ftotal;
$stotal=$row['total_for_second']+$stotal;
$val="'".$row['total_for_third']."'";
$no=$no+1;
}else{
$val="'-'";
}

$values.=$val.",";


}

//echo $subjs."<br>";
//echo $values."<br>";
//echo $total."<br>";

$avr=($total+$ftotal+$stotal)/3;
if($no==0){
$t=0;
}elseif($no>0){
$t=($avr/($no*100))*100;
}

$perc=round($t,2)."%";
//echo $perc."<br>";
$query6="INSERT INTO ".str_replace(" ","_",$class)."_third_term_broad_sheet (student_id,name,$subjs first_term_score, second_term_score, third_term_score, total_average, percentage, session) VALUES ('$student_ids[$i]','$names[$i]',$values'$ftotal','$stotal','$total','$avr','$perc','".SESSION."')";
$query8="DELETE FROM ".str_replace(" ","_",$class)."_third_term_broad_sheet WHERE student_id='$student_ids[$i]' and session='".SESSION."'";

if(mysql_query($query8)){
if(mysql_query($query6)){

//echo "Notice: record Successful for $names[$i]<br>";
}else{
echo "<br>".mysql_error()."<br>";
}

}else{
echo mysql_error();
}



}
echo"<center><table style='width:99%'  cellspacing='1'>";
$sbjs="";
foreach($subjects as $subj){
$sbjs.="<td><div class='turn'>".str_replace("_"," ",$subj)."</div></td>";
}
echo "<thead style='font-size:13px;' align='center'><td>s/n</td><td style='width:700px;'>Name</td>".$sbjs."<td>First-Term Total</td><td>Second-Term Total</td><td>Third-Term Total</td><td>Overall Average</td><td>Percentage</td><td>Position</td></thead>";
$query9="SELECT * FROM ".str_replace(" ","_",$class)."_third_term_broad_sheet WHERE session='".SESSION."' ORDER BY  percentage DESC ";
$sql=mysql_query($query9);
$k=1;
$j=1;
$percentage="";
while($row=mysql_fetch_assoc($sql)){
echo "<tr style='font-size:13px;color:Teal;background-color:PaleTurquoise; border-radius:15px;'>";
echo "<td>".$k."</td>";
echo "<td>".$row['name']."</td>";
foreach($subjects as $subj){
echo "<td>".$row[$subj]."</td>";
}
echo "<td>".$row['first_term_score']."</td>";
echo "<td>".$row['second_term_score']."</td>";
echo "<td>".$row['third_term_score']."</td>";
echo "<td>".$row['total_average']."</td>";
echo "<td>".$row['percentage']."%</td>";

if($k==1){
$perc=$j;
}else{
if($percentage!=$row['percentage']){
$j++;
$perc=$j;
}else{
$perc=$j;
}
}

if($perc==1){
echo "<td>1st</td>";
}elseif($perc==2){
echo "<td>2nd</td>";
}elseif($perc==3){
echo "<td>3rd</td>";
}else{
echo "<td>".$perc."th</td>";
}

$percentage=$row['percentage'];

echo "</tr>";
$k++;
}
echo "</table></center>";
echo'<a href="print_third_term_broad_sheet.php?C='.$_GET['C'].'&id='.$_GET['id'].'">Click To Print Full Result</a>';
echo'<a href="viewclass.php?C='.$_GET['C'].'&id='.$_GET['id'].'" style="float:right;"> Go Back </a>';
?>

</div>
</div>

</body>
</html>
