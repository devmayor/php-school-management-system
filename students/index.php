<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Guidance School Management</title>
<link href="css/style.css" type="text/css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<script src="js/jquery-1.10.2.js"></script>
<script src="js/script.js"></script>
</head>
<body>
<?php include('header.php'); ?>
<?php include('main1.php'); ?>
<?php include('scroll.php'); ?>
<div id="body">
<?php include('menu.php'); ?>
<div id="work">
<div id="login">
<h3>Portal Login</h3>
<form action="" method="post">
<label>Username :</label><input type="text" name="username" id="username" required="required" /><br />
<label>Password :</label><input type="password" name="password" id="password" required="required" /><br />
<input type="submit" name="submit" id="submit" value="Login" />
</form>
<p>Forget Password? Click <a href="">here</a> for Password Recovery</p>
</div>
</div>
</div>
<?php include('footer.php'); ?>
</body>
</html>
