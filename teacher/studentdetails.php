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
if(isset($_GET['student_id'])){
$student_id= $_GET['student_id'];
include('connect.php');
$query="SELECT * FROM students WHERE student_id='$student_id'";
$sql= mysql_query($query);
$row=mysql_fetch_assoc($sql);
$surname=$row['surname'];
$firstname=$row['firstname'];
$othername=$row['othername'];
$username=$row['username'];
$email=$row['email'];
$phone=$row['phone'];
$sex=$row['gender'];
$password=$row['password'];
$age=$row['age'];
$admission_date=$row['admission_date'];
$date_of_birth=$row['date_of_birth'];
$nationality=$row['nationality'];
$religion=$row['religion'];
$class=$row['class_of_admitant'];
$state_of_origin=$row['state_of_origin'];
$state_of_birth=$row['state_of_birth'];
$parent_phone=$row['parent_phone'];
$parent_email=$row['parent_email'];
$address=$row['address'];
$department=$row['department'];
$picture=$row['picture'];
}
?>
<center>

<table border="2" style="margin:10px;" bordercolor="teal" width="70%">
<tr><td colspan="2">
<label style="font-size:25px;">Student Id : <?php echo $student_id;?></label>
<fieldset style="width:140px;float:right">
<legend>PASSPORT</legend>
<?php
echo"<img style='float:right;margin:1px;' src='../uploads/$picture' height='130px' width='130px' alt='$surname'/><br />"
?>
</fieldset>
</td></tr>
<tr><td><label class="label2">Surname</label></td><td><?php echo $surname; ?></td></tr>
<tr><td><label class="label2">Firstname</label></td><td><?php echo $firstname;?></td></tr>
<tr><td><label class="label2">Othername </label></td><td><?php echo $othername;?></td></tr>
<tr><td><label class="label2">Username </label></td><td><?php echo $username; ?></td></tr>
<tr><td><label class="label2">Email</label></td><td><?php echo $email; ?></td></tr>
<tr><td><label class="label2">Phone </label></td><td><?php echo $phone; ?></td></tr>
<tr><td><label class="label2">Sex </label></td><td><?php echo $sex; ?></td></tr>
<tr><td><label class="label2">Password  </label></td><td><?php echo $password; ?></td></tr>
<tr><td><label class="label2">Age  </label></td><td><?php echo $age; ?></td></tr>
<tr><td><label class="label2">Class </label></td><td><?php echo $class; ?></td></tr>
<tr><td><label class="label2">Department </label></td><td><?php echo $department; ?></td></tr>
<tr><td><label class="label2">Date Of Admission  </label></td><td><?php echo $admission_date; ?></td></tr>
<tr><td><label class="label2">Date of Birth  </label></td><td><?php echo $date_of_birth; ?></td></tr>
<tr><td><label class="label2">Nationality  </label></td><td><?php echo $nationality; ?></td></tr>
<tr><td><label class="label2">Religion  </label></td><td><?php echo $religion; ?></td></tr>
<tr><td><label class="label2">State of Origin </label></td><td><?php echo $state_of_origin; ?></td></tr>
<tr><td><label class="label2">State of Birth  </label></td><td><?php echo $state_of_birth; ?></td></tr>
<tr><td><label class="label2">Parent Phone No </label></td><td><?php echo $parent_phone; ?></td></tr>
<tr><td><label class="label2">Parent Email  </label></td><td><?php echo $parent_email; ?></td></tr>
<tr><td><label class="label2">Address  </label></td><td><?php echo $address; ?></td></tr>
</table>


<?php
if(!empty($_SESSION['adminuser'])){
//echo"<a href='student_records.php'>Go Back</a>";
}
if(!empty($_SESSION['teacheruser'])){
//echo"<a href='studentrecord.php'>Go Back</a>";
}


?>
</center>
</div>
</div>
</div>

</body>
</html>
