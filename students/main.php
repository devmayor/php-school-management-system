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
<p class="tops">MAIN MENU</p>

<table class="maintable">
<tr><td class="class">STUDENT ID</td><td class="class2"><?php echo $student['student_id'] ; ?></td><td rowspan="6" class="class2"><fieldset><legend>PASSPORT</legend><img src="..\uploads\<?php echo $student['picture'] ; ?>" width="180px" height="180px" /></fieldset></td></tr>
<tr><td class="class">FULL-NAME</td><td  class="class2"><?php echo $student['surname'].", ".$student['firstname']." ".$student['othername'] ; ?></td></tr>
<tr><td class="class">USERNAME</td><td class="class2"><?php echo $student['username'] ; ?></td></tr>
<tr><td class="class">CLASS</td><td class="class2"><?php echo $student['class_of_admitant'] ; ?></td></tr>
<tr><td class="class">DEPARTMENT</td><td class="class2"><?php echo $student['department'] ; ?></td></tr>
<tr><td class="class">YEAR</td><td class="class2"><?php echo "2012/2013"; ?></td></tr>
</table>
</div>
</div>
<?php include('footer.php'); ?>
</body>
</html>
