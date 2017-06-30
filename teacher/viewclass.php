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
$id=base64_decode($_GET['id']);//class id
echo "<h2>$class</h2>";
echo'<a href="class_details.php?C='.$_GET['C'].'">
<div class="icons">
<img src="../images/icons/1396668675_graduated.png" />
<span class="inner_icons">Class Students</span>
</div></a>';
echo'<a href="print_firstterm_broadsheet.php?C='.$_GET['C'].'&id='.$_GET['id'].'">
<div class="icons">

<span class="inner_icons">First Term Broad Sheet</span>
</div></a>';
echo'<a href="print_second_term_broad_sheet.php?C='.$_GET['C'].'&id='.$_GET['id'].'">
<div class="icons">

<span class="inner_icons">Second Term Broad Sheet</span>
</div></a>';
echo'<a href="print_third_term_broad_sheet.php?C='.$_GET['C'].'&id='.$_GET['id'].'">
<div class="icons">

<span class="inner_icons">Third Term Broad Sheet</span>
</div></a>';
$query="SELECT subjects FROM classes WHERE id='$id' and session='".SESSION."'";
$sql=mysql_query($query);
$subjects="";
while($row=mysql_fetch_assoc($sql)){
$subjects=$row['subjects'];
}
$subjects= explode(',' , $subjects);

$no=count($subjects);
echo "<h2 style='float:left;width:100%'>Subjects Offered In Class</h2>";
foreach($subjects as $subject){
$subj= str_replace('_',' ',$subject);
$subject=base64_encode($subject);
echo"<a href='view_subject.php?sbj=".$subject."&id=".$_GET['id']."'>
<div class='icons'>
<img src='' />
<span class='inner_icons'>$subj</span>
</div></a>";

}

?>
</div>
</div>
</div>

</body>
</html>
