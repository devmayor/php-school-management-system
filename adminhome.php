<?php
include('session.php');


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Guidance School Management</title>
<link href="css/style.css" type="text/css" rel="stylesheet">

</head>

<body>
<div id="header">
<img src="images/guidance.png" style="margin-top:-35px;margin-left:250px;"/>

<div id="logout">
<a href="logoutadmin.php"><label class="logout">Logout</label></a>
</div>
</div>
<?php include('menu.php'); ?>
<div id="body">
<?php  include('notices.php');  ?>
<?php  include('welcome.php');  ?>
<div class="mainjob">

<a href="add_teacher.php">
<div class="icons">
<img src="images/icons/1396669040_teacher_128.png" />
<span class="inner_icons">Add Teacher</span>
</div></a>
<a href="newstudent.php">
<div class="icons">
<img src="images/icons/1396668675_graduated.png" />
<span class="inner_icons">Add Students</span>
</div></a>
<!--<a href="manageclass.php">
<div class="icons">
<img src="images/icons/can-stock-photo_csp16350280.jpg" />
<span class="inner_icons">Manage Class</span>
</div></a>-->
<a href="manage_news.php">
<div class="icons">
<img src="images/icons/news-icon.png" />
<span class="inner_icons">Manage News</span>
</div></a>
<a href="student_records.php">
<div class="icons">
<img src="images/icons/Inventory-icon.png" />
<span class="inner_icons">Student Records</span>
</div></a>
<a href="add_admin.php">
<div class="icons">
<img src="images/icons/1396668191_administrator.png" />
<span class="inner_icons">Add Admin</span>
</div></a>
<a href="notice.php">
<div class="icons">
<span class="inner_icons">Notice Board</span>
</div></a>
<a href="manage_teachers.php">
<div class="icons">
<span class="inner_icons">ManageTeachers</span>
</div></a>
<a href="manage_classes.php">
<div class="icons">
<span class="inner_icons">Manage Classes</span>
</div></a>
<a href="manage_subjects.php">
<div class="icons">
<span class="inner_icons">Manage Subjects</span>
</div></a>
<a href="delete_records.php">
<div class="icons">
<span class="inner_icons">Super Admin</span>
</div></a>
<a href="add_class.php">
<div class="icons">
<span class="inner_icons">Add Class</span>
</div></a>
<a href="add_subject.php">
<div class="icons">
<span class="inner_icons">Add Subject</span>
</div></a>
<a href="change_password.php">
<div class="icons">
<span class="inner_icons">Change Password</span>
</div></a>
<!--<a href="subject.php">
<div class="icons">
<span class="inner_icons">Manage Subjects</span>
</div></a>-->

</div>
</div>

</body>
</html>
