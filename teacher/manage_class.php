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


$class=$adminuser['class'];
$query=mysql_query("SELECT * FROM classes WHERE class_teacher='$username'");
if(mysql_num_rows($query)>0){
while($row=mysql_fetch_assoc($query)){
$class=base64_encode($row['class_name']);//class name
$id=base64_encode($row['id']);//class id
echo "<a href='viewclass.php?C=".$class."&id=".$id."'>
<div class='icons'>
<img src='../images/icons/1396669040_teacher_128.png' />
<span class='inner_icons'>".$row['class_name']."</span>
</div></a>";
}
}else{
echo "No Class Found!!!!";
}


?>
</div>
</div>

</body>
</html>
