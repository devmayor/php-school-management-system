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
<style>
#body{
width:80%;
margin-left:10%;
margin-right:10%;
background-color:white;
font-family:"Helvetica Neue", Helvetica, Arial, sans-serif;;

}
#result{
width:100%;
}
.uppercase{
text-transform:uppercase;
}
h2{
margin-bottom:0px;
text-align:center;
}
h4{
text-align:center;
margin:0px;
}
.left{
text-align:left;
}
.right{
float:right;
text-align:right;
}
label{
font-size:18px;
}

</style>
</head>
<body>



<div id="body">


<?php
include('connect.php');
$username=$student['username'];
$surname=$student['surname'];
$firstname=$student['firstname'];
$othername=$student['othername'];
$student_id=$student['student_id'];
$dept=$student['department'];
$class=$student['class_of_admitant'];
$age=$student['age'];
$sex=$student['gender'];
$term= $_GET['term'];

if($term=="first"){

$query5=mysql_query("SELECT * FROM students WHERE class_of_admitant='$class'");
$no=mysql_num_rows($query5);

$query=mysql_query("SELECT courses FROM students WHERE username='$username'");
while($row=mysql_fetch_assoc($query)){
$courses=$row['courses'];
}
$course=explode(',',$courses);



echo"<h2 class='uppercase' >Guidance School Students Portal</h2>";
echo"<h4 class='uppercase' >$term Term Report</h4>";

echo "<label class='left'><b>Name</b>(Surname first):&nbsp;&nbsp;&nbsp;<u>$surname $firstname $othername</u></label>";
echo "<label class='right'><b>Next Term Begins:&nbsp;&nbsp;&nbsp;</b><u>-------</u></label><br>";


echo "<label class='left'><b>Admission No:&nbsp;&nbsp;&nbsp;</b><u>$student_id</u></label>";
echo "<label class='right'><b>Next Term Ends:&nbsp;&nbsp;&nbsp;</b><u>-------</u></label><br>";


echo "<label class='left'><b>Class:&nbsp;&nbsp;&nbsp;</b><u>$class $dept</u>&nbsp;&nbsp;&nbsp;<b>Year:</b></label>";
echo "<label class='right'><b>Times School Opened:&nbsp;&nbsp;&nbsp;</b><u>-------</u></label><br>";

echo "<label class='left'><b>No. in Class:&nbsp;&nbsp;&nbsp;</b><u>$no</u></label>";
echo "<label class='right'><b>Times Absent:&nbsp;&nbsp;&nbsp;</b><u>-------</u></label><br>";


echo "<label class='left'><b>Sex:</b>&nbsp;<u>$sex</u>&nbsp;&nbsp;&nbsp;<b>Age:</b>$age</label><br>";

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
echo"<br>";
echo "<b>Class Teacher's Remarks and Signature</b><u>_____________________________________________________________________________________</u>";




}elseif($term=="second"){









//second term ---------------------------------------------------------------------------------------------------------------

$query5=mysql_query("SELECT * FROM students WHERE class_of_admitant='$class'");
$no=mysql_num_rows($query5);

$query=mysql_query("SELECT courses FROM students WHERE username='$username'");
while($row=mysql_fetch_assoc($query)){
$courses=$row['courses'];
}
$course=explode(',',$courses);




echo"<h2 class='uppercase' >Guidance School Students Portal</h2>";
echo"<h4 class='uppercase' >$term Term Report</h4>";

echo "<label class='left'><b>Name</b>(Surname first):&nbsp;&nbsp;&nbsp;<u>$surname $firstname $othername</u></label>";
echo "<label class='right'><b>Next Term Begins:&nbsp;&nbsp;&nbsp;</b><u>-------</u></label><br>";


echo "<label class='left'><b>Admission No:&nbsp;&nbsp;&nbsp;</b><u>$student_id</u></label>";
echo "<label class='right'><b>Next Term Ends:&nbsp;&nbsp;&nbsp;</b><u>-------</u></label><br>";


echo "<label class='left'><b>Class:&nbsp;&nbsp;&nbsp;</b><u>$class $dept</u>&nbsp;&nbsp;&nbsp;<b>Year:</b></label>";
echo "<label class='right'><b>Times School Opened:&nbsp;&nbsp;&nbsp;</b><u>-------</u></label><br>";

echo "<label class='left'><b>No. in Class:&nbsp;&nbsp;&nbsp;</b><u>$no</u></label>";
echo "<label class='right'><b>Times Absent:&nbsp;&nbsp;&nbsp;</b><u>-------</u></label><br>";


echo "<label class='left'><b>Sex:</b>&nbsp;<u>$sex</u>&nbsp;&nbsp;&nbsp;<b>Age:</b>$age</label><br>";


echo "<table id='result'>";


echo"<tr><td valign='top' rowspan='3'><b>SUBJECTS</b></td><td colspan='6'><b>2ND TERM RESULT</b></td><td colspan='6'><b>1ST & 2ND TERM RESULT</b></td></tr>";

echo "<tr><td align='middle', colspan='2'><b>CA</b></td><td align='middle', colspan='2'><b>EXAM</b></td><td align='middle', colspan='2'><b>2ND TERM'S TOTAL</b></td><td colspan='2' align='middle' ><b>1ST TERM'S TOTAL</b></td><td rowspan='2'><small><b>Student's<br> Average Score</b></small></td><td rowspan='2'><b>GRADE</b><td rowspan='2'><small><b>TEACHER'S<br>REMARKS </b></small></td></tr>";
echo "<tr><td><small>Marks<br> Obtainable</small></td><td><small>Marks<br> Obtained<small></td><td><small>Marks<br> Obtainable</small></td><td><small>Marks<br> Obtained<small></td><td><small>Marks<br> Obtainable</small></td><td><small>Marks<br> Obtained<small></td><td><small>Marks<br> Obtainable</small></td><td><small>Marks<br> Obtained<small></td></tr>";

foreach($course as $subject){
if($subject!=""){


$ca="CA_for_".$term;


$exam="EXAM_for_".$term;

$tot="total_for_".$term;


$subj=$class.'_'.$subject;



$query2=mysql_query("SELECT * FROM $subj WHERE student_id='$student_id'");
while($row=mysql_fetch_assoc($query2)){
$result1=$row[$ca];
$result2=$row[$exam];
$result3=$row[$tot];
$result4=$row['total_for_first'];
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
if(empty($result4)){
$result4="Nan";
}

$ave=ceil(($result3+$result4)/2);


if($ave>=75){
$grade="A1";
$remark="Excellent";
}elseif($ave>=70){
$grade="B2";
$remark="V.Good";
}elseif($ave>=65){
$grade="B3";
$remark="Good";
}elseif($ave>=60){
$grade="C4";
$remark="Credit";
}elseif($ave>=55){
$grade="C5";
$remark="Credit";
}elseif($ave>=50){
$grade="C6";
$remark="Credit";
}elseif($ave>=45){
$grade="D7";
$remark="Pass";
}elseif($ave>=40){
$grade="D8";
$remark="Pass";
}elseif($ave<40){
$grade="F9";
$remark="Fail";
}


if($result1=="Nan"||$result2=="Nan"||$result3=="Nan"||$result4=="Nan"){
$grade="-";
$remark="Undecided";
}

echo"<tr>";


echo "<td class='subject'>".str_replace("_"," ",$subject)."</td><td>40</td><td>$result1</td><td>60</td><td>$result2</td><td>100</td><td>$result3</td><td>100</td><td>$result4</td><td>$ave</td><td>$grade</td><td>$remark</td>";

echo "</tr>";



}
}
echo"</table>";

echo"<br>";
echo "<b>Class Teacher's Remarks and Signature</b><u>_____________________________________________________________________________________</u>";




}elseif($term=="third"){
//third term --------------------------------------------------------------------------------------------------------------------------------------------------















$query5=mysql_query("SELECT * FROM students WHERE class_of_admitant='$class'");
$no=mysql_num_rows($query5);

$query=mysql_query("SELECT courses FROM students WHERE username='$username'");
while($row=mysql_fetch_assoc($query)){
$courses=$row['courses'];
}
$course=explode(',',$courses);




echo"<h2 class='uppercase' >Guidance School Students Portal</h2>";
echo"<h4 class='uppercase' >$term Term Report</h4>";

echo "<label class='left'><b>Name</b>(Surname first):&nbsp;&nbsp;&nbsp;<u>$surname $firstname $othername</u></label>";
echo "<label class='right'><b>Next Term Begins:&nbsp;&nbsp;&nbsp;</b><u>-------</u></label><br>";


echo "<label class='left'><b>Admission No:&nbsp;&nbsp;&nbsp;</b><u>$student_id</u></label>";
echo "<label class='right'><b>Next Term Ends:&nbsp;&nbsp;&nbsp;</b><u>-------</u></label><br>";


echo "<label class='left'><b>Class:&nbsp;&nbsp;&nbsp;</b><u>$class $dept</u>&nbsp;&nbsp;&nbsp;<b>Year:</b></label>";
echo "<label class='right'><b>Times School Opened:&nbsp;&nbsp;&nbsp;</b><u>-------</u></label><br>";

echo "<label class='left'><b>No. in Class:&nbsp;&nbsp;&nbsp;</b><u>$no</u></label>";
echo "<label class='right'><b>Times Absent:&nbsp;&nbsp;&nbsp;</b><u>-------</u></label><br>";


echo "<label class='left'><b>Sex:</b>&nbsp;<u>$sex</u>&nbsp;&nbsp;&nbsp;<b>Age:</b>$age</label><br>";


echo "<table id='result'>";

echo"<tr><td valign='top' rowspan='2'><b>SUBJECTS</b></td><td colspan='3'><b>3RD TERM RESULT</b></td><td colspan='5'><b>ANNUAL REPORT</b></td></tr>";
echo"<tr><td><small><b>CA</b></small></td><td><small><b>EXAM</b></small></td><td><small><b>Total<br>SCORE</b></small></td><td><small><b>1ST Term's<br>Score</b></small></td><td><small><b>2ND Term's<br>Score</b></small></td><td><small><b>Student's<br>Average Score</b></small></td><td rowspan='2'><small><b>GRADE</b></small></td><td rowspan='2'><small><b>REMARKS</td></tr>";
echo"<tr><td><small><b>MARKS OBTAINABLE</b></small></td><td>40</td><td>60</td><td>100</td><td>100</td><td>100</td><td>100</td></tr>";

foreach($course as $subject){
if($subject!=""){


$ca="CA_for_".$term;

$exam="EXAM_for_".$term;

$tot="total_for_".$term;


$subj=$class.'_'.$subject;



$query2=mysql_query("SELECT * FROM $subj WHERE student_id='$student_id'");
while($row=mysql_fetch_assoc($query2)){
$result1=$row[$ca];
$result2=$row[$exam];
$result3=$row[$tot];
$result4=$row['total_for_first'];
$result5=$row['total_for_second'];


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
if(empty($result4)){
$result4="Nan";
}
if(empty($result5)){
$result5="Nan";
}

$ave=ceil(($result3+$result4+$result5)/3);



if($ave>=75){
$grade="A1";
$remark="Excellent";
}elseif($ave>=70){
$grade="B2";
$remark="V.Good";
}elseif($ave>=65){
$grade="B3";
$remark="Good";
}elseif($ave>=60){
$grade="C4";
$remark="Credit";
}elseif($ave>=55){
$grade="C5";
$remark="Credit";
}elseif($ave>=50){
$grade="C6";
$remark="Credit";
}elseif($ave>=45){
$grade="D7";
$remark="Pass";
}elseif($ave>=40){
$grade="D8";
$remark="Pass";
}elseif($ave<40){
$grade="F9";
$remark="Fail";
}


if($result1=="Nan"||$result2=="Nan"||$result3=="Nan"||$result4=="Nan"||$result5=="Nan"){
$grade="-";
$remark="Undecided";
}

echo"<tr>";


echo "<td class='subject'>".str_replace("_"," ",$subject)."</td><td>$result1</td><td>$result2</td><td>$result3</td><td>$result4</td><td>$result5</td><td>$ave</td><td>$grade</td><td>$remark</td>";

echo "</tr>";



}
}
echo"</table>";

echo"<br>";
echo "<b>Class Teacher's Remarks and Signature</b><u>_____________________________________________________________________________________</u>";





}

?>


</div>

</body>
</html>
