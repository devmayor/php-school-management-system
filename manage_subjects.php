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
<?php
include('menu.php');
?>
<div id="body">
<?php  include('notices.php');  ?>
<?php  include('welcome.php');  ?>
<div class="mainjob">
<h2>Manage Subjects</h2>
<?php
$query=mysql_query("SELECT * FROM subjects WHERE level='senior'");
if(mysql_num_rows($query)>0){
echo "<h3 style='width:100%;float:left;'>Senior Secondary Subjects</h3>";
while($row=mysql_fetch_assoc($query)){
$subject=base64_encode($row['name']);
$id=base64_encode($row['id']);
$sbj=str_replace('_', ' ', $row['name']);
echo "<a href='subject.php?sbj=".$subject."&id=".$id."'>
<div class='icons'>
<img src='images/icons/1396669040_teacher_128.png' />
<span class='inner_icons'>".$sbj."</span>
</div></a>";
}
}
?>

<?php
$query=mysql_query("SELECT * FROM subjects WHERE level='junior'");
if(mysql_num_rows($query)>0){
echo "<h3 style='width:100%;float:left;'>Junior Secondary Subjects</h3>";
while($row=mysql_fetch_assoc($query)){
$subject=base64_encode($row['name']);
$id=base64_encode($row['id']);
$sbj=str_replace('_', ' ', $row['name']);
echo "<a href='subject.php?sbj=".$subject."&id=".$id."'>
<div class='icons'>
<img src='images/icons/1396669040_teacher_128.png' />
<span class='inner_icons'>".$sbj."</span>
</div></a>";
}
}
?>
</div>
</div>

</body>
</html>
