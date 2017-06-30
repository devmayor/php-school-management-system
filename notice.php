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
<h1>Add Notice To Board</h1>

<form action="" method="POST">
<b>Notice</b><br />
<textarea class="textarea" cols="70" rows="3" name="notice"></textarea><br />
<input type="submit" class="submitbutton" name="submit_notice" />
</form>
<?php
if(isset($_POST['submit_notice'])){
$notice=htmlentities(addslashes(trim($_POST['notice'])));
include('connect.php');
$query3="INSERT INTO notice (notice) VALUES ('$notice')";
if($sql=mysql_query($query3)){
echo "<script>alert('Notice Posted')</script>";
}else{
echo "error";
}


}





?>
</div>
</div>
</body>
</html>
