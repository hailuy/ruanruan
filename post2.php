<?php

	header("content-Type: text/html; charset=utf-8");

	include("config.php");
       
	$date=  $_POST['date'];

	$income = $_POST['income'];

	$outcome = $_POST['outcome'];

	$payer = $_POST['payer'];

	$forwhat = $_POST['forwhat'];

	$sql = "INSERT INTO budget (income,outcome,payer,forwhat) 
	VALUES ('$income','$outcome','$payer','$forwhat')";

	mysql_query($sql);

	echo "<script>location.href='index.php';</script>";

?>			