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
$subject=base64_decode($_GET['sbj']);
//$id=base64_decode($_GET['id']);

$subj=str_replace('_', ' ', $subject);	

$sbj=base64_encode($subject);
//$ids=base64_encode($id);

$query=mysql_query("SELECT * FROM classes");
$subjects="";
while($row=mysql_fetch_assoc($query)){
$id=base64_encode($row['id']);
$subjects=$row['subjects'];
$class=$row['class_name'];
$subjects= explode(',' , $subjects);

foreach($subjects as $each){

if($each==$subject){

echo"<a href='view_subjects.php?sbj=".$sbj."&id=".$id."'>
<div class='icons'>
<img src='' />
<span class='inner_icons'>$class</span>
</div></a>";

}

}


}



?>


</div>



</div>
</div>
</body>
</html>
