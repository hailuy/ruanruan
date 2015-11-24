<?php
	header("content-Type: text/html; charset=utf-8");

	include("config.php");




	$sno = $_POST['sno'];

	$mno = $_POST['mno'];

	echo $mno,$sno;
	$sql = "INSERT INTO staff(sno, mno) 
	VALUES ('$sno','$mno')";
	mysql_query($sql);

	echo "<script>location.href='index.php';</script>";
?>