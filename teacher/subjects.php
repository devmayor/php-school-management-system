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
$query=mysql_query("SELECT * FROM subjects WHERE session='".SESSION."' and teacher='$username' and level='senior'");
if(mysql_num_rows($query)>0){
echo "<h3 style='width:100%;float:left;'>Senior Secondary Subjects</h3>";
while($row=mysql_fetch_assoc($query)){
$subject=base64_encode($row['name']);
$id=base64_encode($row['id']);
$sbj=str_replace('_', ' ', $row['name']);
echo "<a href='subject_classes.php?sbj=".$subject."&id=".$id."'>
<div class='icons'>
<img src='../images/icons/1396669040_teacher_128.png' />
<span class='inner_icons'>".$sbj."</span>
</div></a>";
}
}
?>

<?php
$query=mysql_query("SELECT * FROM subjects WHERE session='".SESSION."' and teacher='$username' and level='junior'");
if(mysql_num_rows($query)>0){
echo "<h3 style='width:100%;float:left;'>Junior Secondary Subjects</h3>";
while($row=mysql_fetch_assoc($query)){
$subject=base64_encode($row['name']);
$id=base64_encode($row['id']);
$sbj=str_replace('_', ' ', $row['name']);
echo "<a href='subject_classes.php?sbj=".$subject."&id=".$id."'>
<div class='icons'>
<img src='../images/icons/1396669040_teacher_128.png' />
<span class='inner_icons'>".$sbj."</span>
</div></a>";
}
}
?>
</div>
</div>
</div>
</body>
</html>
