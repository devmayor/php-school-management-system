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
<div id="header"><img src="images/guidance.png" style="margin-top:-35px;margin-left:250px;"/><div id="logout">
<a href="logoutadmin.php"><label class="logout">Logout</label></a>
</div>
</div>
<?php include('menu.php'); ?>
<div id="body">
<?php  include('notices.php');  ?>
<?php  include('welcome.php');  ?>
<div class="mainjob">
<?php
$show="yes";
if(isset($_POST['yes'])){
include('connect.php');
if(isset($_GET['student_id'])){
$student_id=$_GET['student_id'];
$query="DELETE FROM students WHERE student_id='$student_id'";
if(mysql_query($query)){
echo "<script>alert('Student Has Been Successfully Deleted!!!')</script>";
echo "<p>Student Has Been Successfully Deleted!!!</p><a href='student_records.php'>Go Back</a>";
$show="no";
}

}
}
if($show=="yes"){
?>

<center><div style="margin:40px;border-radius:7px;background-color:PaleGreen;"><h1>Are You Sure You Want To Proceed TO Delete This Student<h1></div>
<form method="POST" action=""><input type="hidden" name="f_term_ca"/> <input type="submit" name="yes" style=" margin:20px;height:50px;width:100px;background-color:red;font-size:25px" value="YES" /></form>
<a href="student_records.php"><input type="submit" name="ntn"style="margin:20px;height:50px;width:100px;background-color:green;font-size:25px"value="NO" /></a>
<center>
<?php
}
?>
</div>
</div>

</body>
</html>
