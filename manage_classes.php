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
<?php
$query=mysql_query("SELECT * FROM classes");
while($row=mysql_fetch_assoc($query)){
$class=base64_encode($row['class_name']);//class name
$id=base64_encode($row['id']);//class id
echo "<a href='viewclass.php?C=".$class."&id=".$id."'>
<div class='icons'>
<img src='images/icons/1396669040_teacher_128.png' />
<span class='inner_icons'>".$row['class_name']."</span>
</div></a>";
}
?>






</div>
</div>

</body>
</html>
