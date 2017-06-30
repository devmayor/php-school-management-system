<?php
include('session.php');


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Guidance School Management</title>
<link href="css/style.css" type="text/css" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="jquery-te-1.4.0.css">

<script type="text/javascript" src="js/jquery-1.10.2.js" charset="utf-8"></script>
<script type="text/javascript" src="jquery-te-1.4.0.min.js" charset="utf-8"></script>

<style>
textarea.jqte-test, div.jqte-test, span.jqte-test {
	min-height:100px;
}
#statuss {
	display:block;
	margin:20px 0;
	padding:6px 0 4px;
	width:154px;
	background:#658700;
	border:#526E00 1px solid;
	color:#F3FFCF !important;
	text-align:center;
	font-size:13px;
	font-weight:bold;
	border-radius:3px; -webkit-border-radius:3px; -moz-border-radius:3px;
	box-shadow:0 0 2px #000, inset 0 1px 1px #99CC00; -webkit-box-shadow:0 0 2px #000, inset 0 1px 1px #99CC00; -moz-box-shadow:0 0 2px #000, inset 0 1px 1px #99CC00;
	cursor:pointer;
}
#status:hover {
	background:#78A000;
	border-color:#658700;
	text-decoration:none !important;
	cursor:pointer
}

#status:active {
	background:#3F5500;
	border-color:#2C3C00;
	color:#9CCD00 !important;
	box-shadow:0 0 3px #000,inset 0 -2px 2px #333;
	-webkit-box-shadow:0 0 3px #000, inset 0 -2px 2px #333;
	-moz-box-shadow:0 0 3px #000, inset 0 -2px 2px #333;
}
</style>
</head>

<body>
<div id="header">
<img src="images/guidance.png" style="margin-top:-35px;margin-left:250px;"/>
<div id="logout">
<a href="logoutadmin.php"><label class="logout">Logout</label></a>
</div>
</div>
<?php include('menu.php'); ?>
<div id="body">

<?php  include('notices.php');  ?>
<?php  include('welcome.php');  ?>
<div class="mainjob">

<?php
$id=$_GET['id'];
include('connect.php');
$query2="SELECT * FROM news WHERE id='$id'";
if($result=mysql_query($query2)){
while($row=mysql_fetch_assoc($result)){
$news=$row['news_content'];
echo "<div class='news_div'>
<h3 style='margin:0px; margin-left:10px;'>{$row['news_caption']}</h3><br />
$news<br />
<div><b>By</b> {$row['admin']}<br/>
<b>Date Posted:</b> {$row['date']}<br />
<b>Time Posted:</b> {$row['time']}</div>
</div>";



};

}

echo "<a href='manage_news.php'>Go Back</a>"
?>

</div>
</div>
</body>
</html>
