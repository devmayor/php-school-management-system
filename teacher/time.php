<?php
include('connect.php');

$d=date('Y');
$p=$d+1;
$date=$d."/".$p;

$sql=mysql_query("SELECT * FROM sessions WHERE present='1'");
$row=mysql_fetch_assoc($sql);

//echo date('M');
//echo date('Y');
define('YEAR',$row['session']);
define('SESSION',$row['session']);
?>