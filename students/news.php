<?php
include('session.php');
?>
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
<p class="tops">NEWS</p>
<?php
include('connect.php');
$query2="SELECT * FROM news ORDER BY id DESC LIMIT 0,3";
if($result=mysql_query($query2)){
while($row=mysql_fetch_assoc($result)){
echo "<div class='news_div'>
<h3 class='nd' style='margin:0px;'>{$row['news_caption']}</h3><br />
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
<?php include('footer.php'); ?>
</body>
</html>
