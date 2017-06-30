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
<div id="body">
<h2 style="text-align:center;">Guidance School Student Portal</h2>
<h4 style="text-align:center;">Personal Details</h4>
<center>
<table class="maintable" style="margin:0px;">
<tr><td colspan="2" class="class2"><fieldset><legend>PASSPORT</legend><img src="..\uploads\<?php echo $student['picture'] ; ?>" width="180px" height="180px" /></fieldset></td></tr>
<tr><td class="class">STUDENT ID</td><td class="class2"><?php echo $student['student_id'] ; ?></td></tr>
<tr><td class="class">FULL-NAME</td><td  class="class2"><?php echo $student['surname'].", ".$student['firstname']." ".$student['othername'] ; ?></td></tr>
<tr><td class="class">USERNAME</td><td class="class2"><?php echo $student['username'] ; ?></td></tr>
<tr><td class="class">CURRENT CLASS</td><td class="class2"><?php echo $student['class_of_admitant'] ; ?></td></tr>
<tr><td class="class">DEPARTMENT</td><td class="class2"><?php echo $student['department'] ; ?></td></tr>
<tr><td class="class">YEAR</td><td class="class2"><?php echo "2012/2013"; ?></td></tr>
<tr><td class="class">PHONE NO</td><td class="class2"><?php echo $student['phone'] ; ?></td></tr>
<tr><td class="class">EMAIL</td><td class="class2"><?php echo  $student['email'] ; ?></td></tr>
<tr><td class="class">DATE OF BIRTH</td><td class="class2"><?php echo $student['date_of_birth'] ; ?></td></tr>
<tr><td class="class">SEX</td><td class="class2"><?php echo $student['gender'] ; ?></td></tr>
<tr><td class="class">NATIONALITY</td><td class="class2"><?php echo $student['nationality'] ; ?></td></tr>
<tr><td class="class">RELIGION</td><td class="class2"><?php echo $student['religion'] ; ?></td></tr>
<tr><td class="class">ADDRESS</td><td class="class2"><?php echo $student['address'] ; ?></td></tr>
<tr><td class="class">STATE OF ORIGIN</td><td class="class2"><?php echo $student['state_of_origin'] ; ?></td></tr>
<tr><td class="class">STATE OF BIRTH</td><td class="class2"><?php echo $student['state_of_birth'] ; ?></td></tr>
<tr><td class="class">PARENT PHONE NO</td><td class="class2"><?php echo $student['parent_phone'] ; ?></td></tr>
<tr><td class="class">PARENT EMAIL</td><td class="class2"><?php echo $student['parent_email'] ; ?></td></tr>


</table>
</center>
</div>
</body>
</html>
