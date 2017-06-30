<?php
echo"
<div id='menubar'>
<center>
<ul>";
if(!empty($_SESSION['adminuser'])){
echo"<li><a href='adminhome.php'>Home</a></li>";
}elseif(!empty($_SESSION['teacheruser'])){
echo"<li><a href='teacherhome.php'>Home</a></li>";
}
echo"


		
		<li><a href='register.php'>Register</a></li>
		<li><a href='login.php'>Login</a></li>
		<li><a href='aboutus.php'>About-Us</a></li>
		<li><a href='ourcontact.php'>Our-Contacts</a></li>
</ul>
</center>

</div>
";
?>