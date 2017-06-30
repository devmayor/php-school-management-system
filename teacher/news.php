<?php
include('session.php');


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Guidance School Management</title>
<link href="../css/style.css" type="text/css" rel="stylesheet">
<style>
th{
border-radius:5px;
width:100px;
height:60px;
}
tr{
font-size:13px;
height:40px;
overflow:auto;
background-color:LightBlue;
}
td{
text-align:center;
border-radius:5px;
}
a{
text-decoration:none;
color:green;
}
</style>
</head>

<body>
<div id="header">
<img src="../images/guidance.png" style="margin-top:-35px;margin-left:250px;"/>
<div id="logout">
<a href="logoutadmin.php"><label class="logout">Logout</label></a>
</div>
</div>
<?php
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

<div id="news">
<h2 style="margin:5px; margin-left:50px;">News</h2>
<?php
include('connect.php');
$query2="SELECT * FROM news ORDER BY id DESC LIMIT 0,3";
if($result=mysql_query($query2)){
while($row=mysql_fetch_assoc($result)){
echo "<div class='news_div'>
<h3 style='margin:0px; margin-left:10px;'>{$row['news_caption']}</h3><br />
{$row['news_content']}<br />
By {$row['admin']}<br/>
Date Posted: {$row['date']}<br />
Time Posted: {$row['time']}
</div>";



};

}


?>

</div>
</div>

</div>
</div>
</div>

</body>
</html>
