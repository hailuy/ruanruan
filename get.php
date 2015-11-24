<?php

header("content-Type: text/html; charset=utf-8");

include("config.php");

if($_GET['mno'].$_GET['fname'].$_GET['lname'].$_GET['qq'].$_GET['wechat'].$_GET['tel'].$_GET['email'].$_GET['part'] == '')
	$sq = '';
else{
	$sq = 'and `member`.';
	if(!$_GET['mno']);
	else{
		$mno = $_GET['mno'];
		if($sq !='and `member`.')
			$sq = $sq."and";
		$sq = $sq."`mno` = '$mno'";
	}
	
	if(!$_GET['fname']);
	else{
		$fname = $_GET['fname'];
		if($sq !='and `member`.')
			$sq = $sq."and";
		$sq = $sq." `fname` like '$fname'";
	}
	
	if(!$_GET['lname']);
	else{
		$lname = $_GET['lname'];
		if($sq !='and `member`.')
			$sq = $sq."and";
		$sq = $sq." `lname` like '$lname' ";
	}
	
	if(!$_GET['qq']);
	else{
		$qq = $_GET['qq'];
		if($sq !='and `member`.')
			$sq = $sq."and";
		$sq = $sq." `qq` = '$qq' ";
	}
	
	if(!$_GET['wechat']);
	else{
		$wechat = $_GET['wechat'];
		if($sq !='and `member`.')
			$sq = $sq."and";
		$sq = $sq." `wechat` = '$wechat'";
	}
	
	if(!$_GET['tel']);
	else{
		$tel = $_GET['tel'];
		if($sq !='and `member`.')
			$sq = $sq."and";
		$sq = $sq." `tel` = '$tel'";
	}
	
	if(!$_GET['email']);
	else{
		$email = $_GET['email'];
		if($sq !='and `member`.')
			$sq = $sq."and";
		$sq = $sq." `email` = '$email'";
	}

	if(!$_GET['part']);
	else{
		$part = $_GET['part'];
		if($sq !='and `member`.')
			$sq = $sq."and";
		$sq = $sq." `part` = '$part'";
	}
}


$sql = "select * from `ruan`.`member` where 1 = 1 $sq";

$index = mysql_query($sql);

?>

<html>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<body>

<table width="678" align="center">

<tr>

<td colspan="2"><h1>system</h1></td>

</tr>

<tr>

<td width="600"><a href="index.php">main page</a> | <a href="insert.php">insert</a> | <a href="delete.php">delete</a> | <a href="update.php">update</a> | <a href="select.php">select</a></td>

</tr>

</table>

<table width="700" border="1" align="center" cellpadding="1" cellspacing="1">

<tr>

<td width="100">mno</td>

<td width="100">fname</td>

<td width="100">lname</td>

<td width="100">qq</td>

<td width="100">wechat</td>

<td width="100">tel</td>

<td width="100">email</td>

<td width="100">part</td>
</tr>

<?php

while($row=mysql_fetch_array($index))

{
?>

<tr>

<td width="100"><?php echo $row[0] ?></td>

<td width="100"><?php echo $row[1] ?></td>

<td width="100"><?php echo $row[2] ?></td>

<td width="100"><?php echo $row[3] ?></td>

<td width="100"><?php echo $row[4] ?></td>

<td width="100"><?php echo $row[5] ?></td>

<td width="100"><?php echo $row[6] ?></td>

<td width="100"><?php echo $row[7] ?></td>

</tr>

<?php

}

mysql_close($q);

?>

</table>

</body>

</html>