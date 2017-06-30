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
echo "<a style='font-size:16px;float:right;color:green' href='manage_classes.php'>Go Back</a>";
$class=base64_decode($_GET['C']);
$id=base64_decode($_GET['id']);//class id
echo "<h2>$class</h2>";
echo'<a href="class_details.php?C='.$_GET['C'].'">
<div class="icons">
<img src="images/icons/1396668675_graduated.png" />
<span class="inner_icons">Class Students</span>
</div></a>';
echo'<a href="firstterm_broad_sheet.php?C='.$_GET['C'].'&id='.$_GET['id'].'">
<div class="icons">
<span class="inner_icons">First Term Broad Sheet</span>
<img src="images/icons/firstterm.png" />
</div></a>';
echo'<a href="secondterm_broad_sheet.php?C='.$_GET['C'].'&id='.$_GET['id'].'">
<div class="icons">
<span class="inner_icons">Second Term Broad Sheet</span>
<img src="images/icons/secondterm.png" />
</div></a>';
echo'<a href="thirdterm_broad_sheet.php?C='.$_GET['C'].'&id='.$_GET['id'].'">
<div class="icons">
<span class="inner_icons">Third Term Broad Sheet</span>
<img src="images/icons/thirdterm.png" />
</div></a>';
echo'<a href="chn_teacher.php?C='.$_GET['C'].'&id='.$_GET['id'].'">
<div class="icons">
<span class="inner_icons">Change Class Teacher</span>
</div></a>';
$query="SELECT subjects FROM classes WHERE id='$id' and session='".SESSION."'";
$sql=mysql_query($query);
$subjects="";
while($row=mysql_fetch_assoc($sql)){
$subjects=$row['subjects'];
}
$subjects= explode(',' , $subjects);

$no=count($subjects);
echo "<h2 style='float:left;width:100%'>Subjects Offered In Class</h2>";
foreach($subjects as $subject){
$subj= str_replace('_',' ',$subject);
$subject=base64_encode($subject);
echo"<a href='view_subject.php?sbj=".$subject."&id=".$_GET['id']."'>
<div class='icons'>
<img src='' />
<span class='inner_icons'>$subj</span>
</div></a>";

}

?>
</div>
</div>

</body>
</html>
