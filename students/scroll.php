<?php
$sql1=mysql_query("SELECT notice FROM notice ORDER BY id DESC LIMIT 0,4");
echo"<div id='scroll'>";
echo"<marquee>";
echo "New Announcement: ";
while($row=mysql_fetch_assoc($sql1)){
echo "{$row['notice']} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 

};
echo"</marquee>";
echo"</div>";
?>