<?php
echo"
<div id='menu'>
<h4>My Menu</h4>
<ul>
<li><a href='main.php'>Main Menu</a></li>
<li><a href='personal_details.php'>Personal Details</a></li>
<li><a href='manage_password.php'>Change Password</a></li>
<li><a href='news.php'>News</a></li>
<li><a href='courses.php'>Courses</a></li>
<li id='result'><a>View Result</a></li>
<li id='first'><a href='result.php?term=first'>First Term Result</a></li>
<li id='second'><a href='result.php?term=second'>Second Term Result</a></li>
<li id='third'><a href='result.php?term=third'>Third Term Result</a></li>
<li><a>Contact Teacher</a></li>
<li><a href='logout.php' onclick='logout()'>Logout</a></li>
</ul>
</div>
";

?>