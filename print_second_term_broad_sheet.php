<?php
include('session.php');


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Guidance School Management</title>

<script type="text/javascript">
function confirmation() { 
var result = confirm("Are you sure you want to delete this user?")
if (answer){  } else{ window.location = "http://www.google.com/"; }
}
</script>
<style>
body{
background:white;
color:black;
}
th{
border-radius:5px;
-moz-border-radius:5px;
-webkit-border-radius:5px;
width:100px;
height:60px;
}
tr{
font-weight:bold;
font-size:14px;
height:40px;

overflow:auto;
}
td{
border:1px solid black;
text-align:center;
border-radius:1px;
}
a{
text-decoration:none;
position:static;
top:610px;
}
</style>
</head>

<body>
<?php
include('time.php');
$class=base64_decode($_GET['C']);
$id=base64_decode($_GET['id']);
echo"<h1 style='text-align:center;'>GUIDANCE SCHOOL MANAGEMENT SYSTEM</h1>";
echo "<center><h2>$class Second Term Broad Sheet</h2></center>";
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
$no=0;
$subjs="";
$values="";
foreach($subjects as $subj){
$subjs.=$subj.",";

$query7=mysql_query("SELECT total_for_second,total_for_first FROM $subj WHERE student_id='$student_ids[$i]' and class='$class'");
if($query7){
$row=mysql_fetch_assoc($query7);
}
if(isset($row['total_for_second'])){
$ftotal=$row['total_for_first']+$ftotal;
$total=$row['total_for_second']+$total;

$val="'".$row['total_for_second']."'";
$no=$no+1;
}else{
$val="'-'";
}

$values.=$val.",";


}

//echo $subjs."<br>";
//echo $values."<br>";
//echo $total."<br>";
if($no==0){
$t=0;
}elseif($no>0){
$t=((($total+$ftotal)/2)/($no*100))*100;
}
$perc=round($t,2);
//echo $perc."<br>";
$query6="INSERT INTO ".str_replace(" ","_",$class)."_second_term_broad_sheet (student_id,name,$subjs total_marks,total_for_first,percentage,session) VALUES ('$student_ids[$i]','$names[$i]',$values'$total','$ftotal','$perc','".SESSION."')";
$query8="DELETE FROM ".str_replace(" ","_",$class)."_second_term_broad_sheet WHERE student_id='$student_ids[$i]' and session='".SESSION."'";

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
echo"<table style='width:80%;border:1px solid black;margin-left:10%;margin-right:10%;'   cellspacing='1'>";
$sbjs="";
foreach($subjects as $subj){
$sbjs.="<td><div class='turn'>".str_replace("_"," ",$subj)."</div></td>";
}
echo "<thead style='font-size:13px;' align='center'><td>s/n</td><td style='width:700px;'>Name</td>".$sbjs."<td>Total-Marks</td><td>First Term Total</td><td>Percentage</td><td>Position</td></thead>";
$query9="SELECT * FROM ".str_replace(" ","_",$class)."_second_term_broad_sheet WHERE session='".SESSION."' ORDER BY  percentage DESC 
LIMIT 0 , 30";
$sql=mysql_query($query9);
$k=1;
$j=1;
$percentage="";
while($row=mysql_fetch_assoc($sql)){
echo "<tr>";
echo "<td>".$k."</td>";
echo "<td>".$row['name']."</td>";
foreach($subjects as $subj){
echo "<td>".$row[$subj]."</td>";
}
echo "<td>".$row['total_marks']."</td>";
echo "<td>".$row['total_for_first']."</td>";
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
echo "</table>";
echo'<a href="secondterm_broad_sheet.php?C='.$_GET['C'].'&id='.$_GET['id'].'">Go Back</a>';

?>




</body>
</html>