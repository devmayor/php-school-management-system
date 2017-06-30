<?php
include('session.php');


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Guidance School Management</title>
<link href="css/style.css" type="text/css" rel="stylesheet">
<style>
th{
border-radius:5px;
width:100px;
height:60px;
}
tr{
font-size:13px;
height:40px;
overflow:auto;
background-color:LightBlue;
}
td{
text-align:center;
border-radius:5px;
}
a{
text-decoration:none;
color:green;
}
</style>
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
$class=base64_decode($_GET['C']);
?>
<h2><?php echo "$class Students Details"; ?></h2>
<?php
include('connect.php');
$query="SELECT * FROM students WHERE class_of_admitant='$class'";
$sql=mysql_query($query);
echo "<table width:90%;>";
echo "<tr style='font-size:13px;color:Teal;background-color:PaleTurquoise; border-radius:15px;' align='center'><th>Student id</th><th>Surname</th><th>Firstname</th><th>Othername</th><th>username</th><th>Phone</th><th>Email</th><th>Sex</th><th>Address</th><th>D.O.B</th><th>State of Origin</th><th>View Full</th></tr>";
while($row=mysql_fetch_assoc($sql)){
$a=$_SERVER['PHP_SELF'];
$page=base64_encode($a);
echo "<tr>
<td>{$row['student_id']}</td><td>{$row['surname']}</td><td>{$row['firstname']}</td><td>{$row['othername']}</td><td>{$row['username']}</td><td>{$row['phone']}</td><td>{$row['email']}</td><td>{$row['gender']}</td><td>{$row['address']}</td><td>{$row['date_of_birth']}</td><td>{$row['state_of_origin']}</td><td><a href='studentdetails.php?student_id={$row['student_id']}&PG=$page'>View</a></td>




</tr>";


}
echo "</table>";
?>
</div>
</div>

</body>
</html>
