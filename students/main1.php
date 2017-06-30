<?php
include('connect.php');
$username=$student['username'];
$surname=$student['surname'];
$firstname=$student['firstname'];
$othername=$student['othername'];
$student_id=$student['student_id'];
$class=$student['class_of_admitant'];
//$sql=mysql_query("SELECT * FROM students WHERE username='$username'");

echo"<div id='main'>
<span class='welcome'>WELCOME:</span> <span class='name'>$surname $firstname $othername</span>   <span style='margin-left:100px;' class='welcome'>Login Id:</span>$username  <a href='logout.php' onclick='logout()' style='margin-left:200px;'>Logout</a><span class='welcome' style='margin-left:200px;'> Today:&nbsp;</span><span > ".date('l   j  \of F Y ')." </span>
</div>";
?>