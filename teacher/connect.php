<?php
$sname="localhost";
$uname="afrisoft";
$pass="mayowa1995";
$db="school";

$con = mysql_connect("$sname","$uname","$pass")
or die("cannot connect");
mysql_select_db("$db")or die ("DB does not exist");




?>
