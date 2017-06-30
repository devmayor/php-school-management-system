<?php
include('session.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Guidance School Management</title>
<link href="css/style.css" type="text/css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<script src="js/jquery-1.10.2.js"></script>
<script src="js/script.js"></script>
</head>
<body>
<?php include('header.php'); ?>
<?php include('main1.php'); ?>
<?php include('scroll.php'); ?>
<div id="body">
<?php include('menu.php'); ?>
<div id="work">
<?php
$term= $_GET['term'];

echo "<p class='tops'>$term TERM RESULT</p>";


$query=mysql_query("SELECT courses FROM students WHERE username='$username'");
while($row=mysql_fetch_assoc($query)){
$courses=$row['courses'];
}
$course=explode(',',$courses);

echo "<table id='result'>";
echo "<tr><td valign='top' rowspan='2'><b>SUBJECTS</b></td><td align='middle', colspan='2'><b>CA</b></td><td align='middle', colspan='2'><b>EXAM</b></td><td align='middle', colspan='2'><b>TOTAL</b></td><td rowspan='2'><b>GRADE</b><td rowspan='2'><small><b>TEACHER'S<br>REMARKS </b></small></td></tr>";
echo "<tr><td><small>Marks<br> Obtainable</small></td><td><small>Marks<br> Obtained<small></td><td><small>Marks<br> Obtainable</small></td><td><small>Marks<br> Obtained<small></td><td><small>Marks<br> Obtainable</small></td><td><small>Marks<br> Obtained<small></tr>";

foreach($course as $subject){
if($subject!=""){


$ca="CA_for_".$term;

$exam="EXAM_for_".$term;

$tot="total_for_".$term;


$subj=$subject;



$query2=mysql_query("SELECT $ca FROM $subj WHERE student_id='$student_id'");
if(!$query2){
echo mysql_error();
}
while($row=mysql_fetch_assoc($query2)){
$result1=$row[$ca];

}


$query2=mysql_query("SELECT $exam FROM $subj WHERE student_id='$student_id'");


while($row=mysql_fetch_assoc($query2)){
$result2=$row[$exam];

}


$query3=mysql_query("SELECT $tot FROM $subj WHERE student_id='$student_id'");
while($row=mysql_fetch_assoc($query3)){
$result3=$row[$tot];

}

if(empty($result1)){
$result1="Nan";
}
if(empty($result2)){
$result2="Nan";
}
if(empty($result3)){
$result3="Nan";
}



if($result3>=75){
$grade="A1";
$remark="Excellent";
}elseif($result3>=70){
$grade="B2";
$remark="V.Good";
}elseif($result3>=65){
$grade="B3";
$remark="Good";
}elseif($result3>=60){
$grade="C4";
$remark="Credit";
}elseif($result3>=55){
$grade="C5";
$remark="Credit";
}elseif($result3>=50){
$grade="C6";
$remark="Credit";
}elseif($result3>=45){
$grade="D7";
$remark="Pass";
}elseif($result3>=40){
$grade="D8";
$remark="Pass";
}elseif($result3<40){
$grade="F9";
$remark="Fail";
}




if($result1=="Nan"||$result2=="Nan"){
$grade="-";
$remark="Undecided";
}

echo"<tr>";


echo "<td class='subject'>".str_replace("_"," ",$subject)."</td><td>40</td><td>$result1</td><td>60</td><td>$result2</td><td>100</td><td>$result3</td><td>$grade</td><td>$remark</td>";

echo "</tr>";



}
}

echo"</table>";

echo "<u><a href='print_result.php?term=$term'>Print $term Term Result</a></u>";
?>

</div>
</div>
<?php include('footer.php'); ?>
</body>
</html>
