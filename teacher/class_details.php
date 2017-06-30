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
$class=base64_decode($_GET['C']);
?>
<h2><?php echo "$class Students Details"; ?></h2>
<?php
include('connect.php');
$query="SELECT * FROM students WHERE class_of_admitant='$class'";
$sql=mysql_query($query);
echo "<table class='ttable' width:90%;>";
echo "<tr style='font-size:13px;color:Teal;background-color:PaleTurquoise; border-radius:15px;' align='center'><th>Student id</th><th>Surname</th><th>Firstname</th><th>Othername</th><th>username</th><th>Phone</th><th>Email</th><th>Sex</th><th>D.O.B</th><th>State of Origin</th><th>View Full</th></tr>";
while($row=mysql_fetch_assoc($sql)){
$a=$_SERVER['PHP_SELF'];
$page=base64_encode($a);
echo "<tr>
<td>{$row['student_id']}</td><td>{$row['surname']}</td><td>{$row['firstname']}</td><td>{$row['othername']}</td><td>{$row['username']}</td><td>{$row['phone']}</td><td>{$row['email']}</td><td>{$row['gender']}</td><td>{$row['date_of_birth']}</td><td>{$row['state_of_origin']}</td><td><a href='studentdetails.php?student_id={$row['student_id']}&PG=$page'>View</a></td>




</tr>";


}
echo "</table>";
?>
</div>
</div>
</div>

</body>
</html>
