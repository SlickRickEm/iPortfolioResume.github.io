<?php

//TESTING CONNECT
//	$con = mysql_connect("localhost","root","joe1291984") or die("Could not connect to MySQL".mysql_error());
//	mysql_select_db("pdr", $con) or die ("Could not select db: " . mysql_error());

//SITES CONNECT
//	$con = mysql_connect("localhost","root","") or die("Could not connect to MySQL".mysql_error());
//	mysql_select_db("pdr", $con) or die ("Could not select db: " . mysql_error());

//LIVE CONNECT
die(mysql_error() . "Could not connect to MySQL") or $con = mysql_connect("localhost","pdrnjcom_website","zup$7uqECREH#");
mysql_selectdb("pdrnjcom_website", $con) or die ("Could not select db: " . mysql_error());

?>


