<?php
echo"<div id='notice'>";
echo"<marquee>";
include('connect.php');
$query4="SELECT notice FROM notice ORDER BY id DESC LIMIT 0,3";
$result=mysql_query($query4);
echo "New Announcement: ";
while($row=mysql_fetch_assoc($result)){
echo "{$row['notice']} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 

};
echo"</marquee></div>";
?>