<?php
include('session.php');


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Guidance School Management</title>
<link href="css/style.css" type="text/css" rel="stylesheet">
<script type="text/javascript">
function confirmation() { 
var result = confirm("Are you sure you want to delete this user?")
if (answer){  } else{ window.location = "http://www.google.com/"; }
}
</script>
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
<div id="header"><img src="images/guidance.png" style="margin-top:-35px;margin-left:250px;"/><div id="logout">
<a href="logoutadmin.php"><label class="logout">Logout</label></a>
</div>
</div>
<?php include('menu.php'); ?>
<div id="body">

<?php  include('notices.php');  ?>
<?php  include('welcome.php');  ?>
<div class="mainjob">
<center><h3>Manage Teachers</h3></center>
<?php
include('connect.php');
$teachers=mysql_query("SELECT * FROM teacher");
echo"<table>";
echo"<thead>";
echo"<th>Surname</th>";
echo"<th>Firstname</th>";
echo"<th>Othername</th>";
echo"<th>Username</th>";
echo"<th>Phone No</th>";
echo"<th>Email</th>";
echo"<th>Adress</th>";
echo"<th>Sex</th>";
echo"<th>Age</th>";
echo"<th>Acess</th>";
echo"<th>Edit</th>";
echo"<th>Delete</th>";
echo"</thead>";
while($row=mysql_fetch_assoc($teachers)){
echo"<tr>";
echo"<td>{$row['surname']}</td>";
echo"<td>{$row['firstname']}</td>";
echo"<td>{$row['othername']}</td>";
echo"<td>{$row['username']}</td>";
echo"<td>{$row['phone']}</td>";
echo"<td>{$row['email']}</td>";

echo"<td>{$row['address']}</td>";
echo"<td>{$row['sex']}</td>";
echo"<td>{$row['age']}</td>";
if($row['acess']==1){

echo"<td>Allowed</td>";
}
if($row['acess']==0){
echo"<td>Not Allowed</td>";
}
$username=base64_encode($row['username']);
echo"<td><a href='edit_teachers.php?username=$username'>Edit</a></td>";
echo"<td><a href='delete_teacher.php?username=$username'>Delete</a></td>";
echo"</tr>";
}
echo"</table>";
?>
</div>
</div>
</body>
</html>
