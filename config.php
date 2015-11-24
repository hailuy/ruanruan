<?php
	$dbName="u745952349_p2";
	$host="mysql.hostinger.co.uk";
	$username="u745952349_root";
	$password="isaacnewton";
	@$dbh=mysql_connect($host,$username,$password) or die("cannot find DBMS");
	$db=mysql_select_db($dbName,$dbh) or die("cannot find db"); 
        mysql_query("set names utf8"); 

?>			