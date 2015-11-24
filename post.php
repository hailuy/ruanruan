<?php
	header("content-Type: text/html; charset=utf-8");

	include("config.php");
	

	$fname=  $_POST['fname'];

	$lname=  $_POST['lname'];

	$qq = $_POST['qq'];

	$wechat = $_POST['wechat'];

	$tel = $_POST['tel'];

	$email = $_POST['email'];

	$part = $_POST['part'];//insert.php part&#34892;&#36755;&#20837;&#26694;&#26174;&#31034;“&#36755;&#20837;S/A/T/B" &#36873;&#20013;&#28040;&#22833; &#21453;&#36873;&#37325;&#29616;
	echo $id;
	$sql = "insert into member(fname,lname,qq,wechat,tel,email,part) values 
	('$fname','$lname','$qq','$wechat','$tel','$email','$part')";

	mysql_query($sql);

	echo "<script>location.href='index.php';</script>";
	

?>