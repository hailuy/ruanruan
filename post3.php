<?php


	header("content-Type: text/html; charset=utf-8");

	include("config.php");

	$date = $_POST['date'];

	$number = $_POST['number'];

	$mno = $_POST['mno'];

	$nickname = $_POST['nickname'];

	$word = $_POST['word'];

	$sql = "INSERT INTO board (mno,nickname,word) 
	VALUES ('$mno','$nickname','$word')";

	mysql_query($sql);

	echo "<script>location.href='index.php';</script>";
?>