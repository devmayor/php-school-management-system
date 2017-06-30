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
$student_id=base64_decode($_GET['student_id']);
$subject=base64_decode($_GET['subject']);
$id=base64_decode($_GET['id']);

$sbj=base64_encode($subject);
$ids=base64_encode($id);
$deleted="no";
if(isset($_POST['yes'])){
include('connect.php');
if(isset($_GET['student_id']) && isset($_GET['subject'])){


$query1="DELETE FROM $subject WHERE student_id='$student_id'";
if($sql=mysql_query($query1)){
echo"<script>alert('Record Sucessfully Deleted')</script>";
$deleted="yes";

}else{
echo"Error ".mysql_error()."Please Contact Developer";
}
}

}

if($deleted=="no"){
?>
<center><div style="margin:40px;border-radius:7px;background-color:PaleGreen;"><h1>Are You Sure You Want To Proceed TO Delete This Record<h1></div>
<form method="POST" action=""><input type="hidden" name="f_term_ca"/> <input type="submit" name="yes" style=" margin:20px;height:50px;width:100px;background-color:red;font-size:25px" value="YES" /></form>
<a <?php echo"href='view_subject.php?sbj=$sbj&id=$ids'; "; ?>><input type="submit" name="ntn"style="margin:20px;height:50px;width:100px;background-color:green;font-size:25px"value="NO" /></a>
<center>

<?php
}elseif($deleted=="yes"){
Echo "The Student Record Has Been Sucessfully Deleted";
echo "<a href='view_subject.php?sbj=$sbj&id=$ids'><div style='border-radius:7px;background-color:teal;margin:20px;padding:5px;color:red;font-size:20px;width:100px;height:30px;'>Go Back</div></a>";


}
?>


</div>
</div>

</body>
</html>
