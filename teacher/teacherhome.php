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
<a href="personal_details.php">
<div class="icons2">
<img src="../images/icons/1396668191_administrator.png" />
<span class="inner_icons2">Personal Details</span>
</div></a>
<a href="manage_class.php">
<div class="icons2">
<img src="../images/icons/can-stock-photo_csp16350280.jpg" />
<span class="inner_icons2">Manage Class</span>
</div></a>
<a href="subjects.php">
<div class="icons2">
<img src="" />
<span class="inner_icons2">Manage Subjects</span>
</div></a>
<a href="studentrecord.php">
<div class="icons2">
<img src="../images/icons/Inventory-icon.png" />
<span class="inner_icons2">View Records</span>
</div></a>
<a href="news.php">
<div class="icons2">
<img src="../images/icons/news-icon.png" />
<span class="inner_icons2">News</span>
</div></a>
<a href="change_password.php">
<div class="icons2">
<img src="" />
<span class="inner_icons2">Change Password</span>
</div></a>

</div>
</div>
</div>

</body>
</html>
