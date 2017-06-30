<?php
include('session.php');

?>

<?php
$title="<title>Guidance School Management</title>";
include('header.php');
include('menu.php');
?>
<div id="body">
<?php  include('notices.php');  ?>
<?php  include('welcome.php');  ?>
<div class="mainjob">
<?php
include('leftbar.php');
?>
<div class="rightbar">
<?php
include('connect.php');
$username=$adminuser['username'];
if(!empty($username)){
$query=mysql_query("SELECT * FROM teacher WHERE username='$username'");
$row=mysql_fetch_assoc($query);
$surname=$row['surname'];
$firstname=$row['firstname'];
$othername=$row['othername'];
$phone=$row['phone'];
$email=$row['email'];
$class=$row['class'];
$address=$row['address'];
$sex=$row['sex'];
$age=$row['age'];
}
?><center>
<table border="2" style="margin:10px;" bordercolor="teal" width="50%">
<tr><td style="text-align:center" colspan="2"><h4>Personal Details</h4></td></tr>
<tr><td><label class="label2">Surname</label></td><td><?php echo $surname; ?></td></tr>
<tr><td><label class="label2">Firstname</label></td><td><?php echo $firstname;?></td></tr>
<tr><td><label class="label2">Othername </label></td><td><?php echo $othername;?></td></tr>
<tr><td><label class="label2">Username </label></td><td><?php echo $username; ?></td></tr>
<tr><td><label class="label2">Email</label></td><td><?php echo $email; ?></td></tr>
<tr><td><label class="label2">Phone </label></td><td><?php echo $phone; ?></td></tr>
<tr><td><label class="label2">Sex </label></td><td><?php echo $sex; ?></td></tr>
<tr><td><label class="label2">Age  </label></td><td><?php echo $age; ?></td></tr>
<tr><td><label class="label2">Class </label></td><td><?php echo $class; ?></td></tr>
<tr><td><label class="label2">Address  </label></td><td><?php echo $address; ?></td></tr>
</table>
<a href="teacherhome.php">Go Back</a>
</center>
</div>
</div>
</div>

</body>
</html>
