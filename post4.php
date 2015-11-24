<?php


	header("content-Type: text/html; charset=utf-8");

	include("config.php");

	$date = $_POST['date'];

	$number = $_POST['number'];

	$word = $_POST['word'];

	$sql = "insert into viewboard (number,date,word) 
	values ('$number','$date','$word')";
	mysql_query($sql);

	echo "<script>location.href='index.php';</script>";

?>