<?php
include("config.php");

$sql = "select * from member"; 

$result = mysql_query($sql);

if (!$result) { // add this check.
    die('Invalid query: ' . mysql_error());
}

?>
<!DOCTYPE html>
<html>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="mystyle.css">
<head>
<title>Ruanruan Choir</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">
</script>
<script>
$(document).ready(function(){
    $("#f1").click(function(){
        $("div.joinus-1").toggle();
    });
});
$(document).ready(function(){
    $("#f2").click(function(){
        $("div.joinus-2").toggle();
    });
});
$(document).ready(function(){
    $("#f3").click(function(){
        $("div.joinus-3").toggle();
    });
});
$(document).ready(function(){
    $("#f4").click(function(){
        $("div.joinus-4").toggle();
    });
});
</script>
</head>
<body>

<div class="header">

</div>
<div id="scrolltop" onclick="pageScroll()" >
<table class="scrolltable" width="100%" height="100%" >
<tr><td>&nbsp</td></tr>
</table>
</div>
<div class="menubar">

<table class="navtable">
<tr >
<td width="70%"><h2 >NAVIGATION</h2></td>
<td class="navtd" width="10%" align="center" onclick="nav1()"><h2 >About us</h2></td>
<td class="navtd" width="10%" align="center" onclick="nav2()"><h2 >Join us</h2></td>
<td class="navtd2" width="10%" align="center" onclick="nav3()"><h2>Admin</h2></td>
</tr>
</table>
</div>
<script>
function nav1(){
	if(window.pageYOffset>310 || window.pageYOffset<290)
	{
		if(window.pageYOffset<300){
			window.scrollBy(0,10);
			scrolldelay=setTimeout('nav1()',2);
		}
		else{
			window.scrollBy(0,-10);
			scrolldelay=setTimeout('nav1()',2);
		}
	}
}
function nav2(){
	if(window.pageYOffset>810 || window.pageYOffset<790)
	{
		if(window.pageYOffset<800){
			window.scrollBy(0,10);
			scrolldelay=setTimeout('nav2()',2);
		}
		else{
			window.scrollBy(0,-10);
			scrolldelay=setTimeout('nav2()',2);
		}
	}
}
function nav3(){
	var elmnt = document.getElementById("admin");
	if(window.pageYOffset>(elmnt.offsetTop-500+10) || window.pageYOffset<(elmnt.offsetTop-500-10))
	{
		if(window.pageYOffset<elmnt.offsetTop-500){
			window.scrollBy(0,10);
			scrolldelay=setTimeout('nav3()',2);
		}
		else{
			window.scrollBy(0,-10);
			scrolldelay=setTimeout('nav3()',2);
		}
	}
}
</script>


<div class="container">
	<div class="title">
		<h3 class="title-title">Ruanruan Choir</h3>
		<h3 class="title-sub">----A Club From SCS Department,Tianjin University</h3><br>
		<h3 class="title-slogan">"We r the geeks who rock the world & we r the painters who rebuild it"</h3>
		<hr color="#CCCCCC" height="1px">
		<h3 class="title-fb">Follow us on social software:<a href="https://www.facebook.com" target="blank"><img alt="fb link" src="fb.png" height="20px" width="20px"/></a></h3>
	</div>
	
	<div class="logo">
		<img src="logo.jpg" alt="main logo" height="219" width="155">
	</div>
	
	<div class="aboutus">
		<hr color="#cccccc" height="2">
		<hr color="#cccccc" height="2">
		<h1 class="aboutus-title"> About Us..</h1>
		<div class="aboutus-ad">
			<object width="100%" height="365px"  >
			<param name="play" value="false">
			<param NAME="url" value="SCSAT.swf">
			</object>

		</div>
		
		<div class="aboutus-news">
			<h4 class="news-title">Latest News</h4>
			<iframe src="news1.html" width="100%" "
				frameborder="0" marginwidth="0" marginheight="0" scrolling="no">
				Your browser does not support the IFRAME tag.
			</iframe>
		</div>
		<div class="aboutus-iminai">
			<p>What a Fuchsia is the introduction.<br />
			<img src="face.png" alt="smiling face" width="30px">U know what I mean<img src="face.png" alt="smiling face" width="30px"><img src="face.png" alt="smiling face" width="30px">
			<br />
			Just help uself<img src="face.png" alt="smiling face" width="30px"></p>
			
		</div>
		<div>
		</div>
	</div>
	<br><br><br><br><br><br><br><br><br><br><br><br>

	<div class="joinus">
		<hr color="red" height="2">
		<div align="center">
<table>
<tr>
<td>		<img src="1.png" alt="1" ></td>
<td>		<img src="2.png" alt="2" ></td>
<td>		<img src="3.png" alt="3" ></td>
</tr>
<tr>
<td>		<img src="4.png" alt="4" ></td>
<td>		<img src="5.png" alt="5" ></td>
<td>		<img src="6.png" alt="6" ></td>
</tr>
</table>
		</div>
		<hr color="#cccccc" height="2">
		<hr color="#cccccc" height="2">
		<h1 class="joinus-title">Join Us Now!------------><button onclick="myFunction3()" class="btn">JOIN</button></h1>
		
		<div align="center" id="iframes">
		<table  align="center"  class="table" >
			<tr >
			<td class="joinus-tbtitle"><p >Click to show & hide</p></td>
			<td class="joinus-td"><button id="f1">Form No.1</button></td>
			<td class="joinus-td"><button id="f2">Form No.2</button></td>	
			<td class="joinus-td"><button id="f3">Form No.3</button></td>
			<td class="joinus-td"><button id="f4">Form No.4</button></td>	
			</tr>
		</table>
		<div class="joinus-1">
			<iframe src="insert.php" width="80%" height="430px"
				frameborder="0" marginwidth="0" marginheight="0" scrolling="no">
				Your browser does not support the IFRAME tag.
			</iframe>
		</div>
		<div class="joinus-2">
			<iframe src="delete.php" width="80%" height="430px"
				frameborder="0" marginwidth="0" marginheight="0" scrolling="no">
				Your browser does not support the IFRAME tag.
			</iframe>
		</div>
		<div class="joinus-3">
			<iframe src="update.php" width="80%" height="430px"
				frameborder="0" marginwidth="0" marginheight="0" scrolling="no">
				Your browser does not support the IFRAME tag.
			</iframe>
		</div>
		<div class="joinus-4">
			<iframe src="select.php" width="80%" height="430px"
				frameborder="0" marginwidth="0" marginheight="0" scrolling="no">
				Your browser does not support the IFRAME tag.
			</iframe>
		</div>
		</div>
	
		<hr color="#cccccc" height="2">
		<hr color="#cccccc" height="2">
		<h1 id="admin">Admin's Section</h1>
    </div>
	<table class="btns">
	<tr>
		<td><button onclick="myFunction1()" class="btn">Show all</button></td>

		<td><button onclick="myFunction2()" class="btn">Collapse</button></td>
	</tr>
	</table>
	<script>
function pageScroll() {
	if(window.pageYOffset!=0)
	{
		window.scrollBy(0,-10);
		scrolldelay=setTimeout('pageScroll()',2);
	}
}
function myFunction1() {
    document.all["tables"].style.display="block";
}
function myFunction2() {
    document.all["tables"].style.display="none";
}
function myFunction3() {
    document.all["iframes"].style.display="block";
}
</script>
	
	
<div id="tables">

	<table  align="center"  class="table" >
			<tr >
			<td class="table-title"><p >member</p></td>
			<td width="600" ><a href="index.php">member</a> | <a href="insert.php">insert</a> | <a href="delete.php">delete</a> | <a href="update.php">update</a> | <a href="select.php">select</a></td>
			</tr>
		</table>
	<table width="800" border="1" align="center" cellpadding="1" cellspacing="1">
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

			while($row=mysql_fetch_array($result))

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

				//mysql_close($dbh);
			}

			?>


		</table>
	<?php

	include("config.php");

	$sql = "select * from staff"; 

	$result = mysql_query($sql,$dbh);

	?>
	
	<hr color="black" height="2" width="70%">
	
	<table align="center" class="table" >

		<tr>

			<td class="table-title"><p >staff</p></td>

			<td width="600"><a href="index.php">staff</a> | <a href="insert1.php">insert</a> | <a href="delete1.php">delete</a> | <a href="update1.php">update</a> | <a href="select1.php">select</a></td>

		</tr>

	</table>

	<table width="800" border="1" align="center" cellpadding="1" cellspacing="1">

		<tr>

			<td width="100">sno</td>

			<td width="100">mno</td>

		</tr>

		<?php

		while($row=mysql_fetch_array($result))
		{
		?>

		<tr>

			<td width="100"><?php echo $row[0] ?></td>

			<td width="100"><?php echo $row[1] ?></td>

		</tr>

		<?php

		}

		mysql_close($dbh);

		?>


	</table>


	<?php

	include("config.php");

	$sql = "select * from budget"; 

	$result = mysql_query($sql,$dbh);

	?>
	<hr color="black" height="2" width="70%">
	<table align="center" class="table">

		<tr>

			<td class="table-title"><p  >budget</p></td>

			<td width="600"><a href="index.php">budget</a> | <a href="insert2.php">insert</a> | <a href="delete2.php">delete</a> | <a href="update2.php">update</a> | <a href="select2.php">select</a></td>

		</tr>

	</table>

	<table width="800" border="1" align="center" cellpadding="1" cellspacing="1">

		<tr>

			<td width="100">date</td>

			<td width="100">income</td>

			<td width="100">outcome</td>

			<td width="100">payer</td>

			<td width="100">forwhat</td>

	</tr>

<?php

while($row=mysql_fetch_array($result))

{
?>

<tr>

<td width="100"><?php echo $row[0] ?></td>

<td width="100"><?php echo $row[1] ?></td>

<td width="100"><?php echo $row[2] ?></td>

<td width="100"><?php echo $row[3] ?></td>

<td width="100"><?php echo $row[4] ?></td>

</tr>

<?php

}

mysql_close($dbh);

?>


</table>

<?php

include("config.php");

$sql = "select * from board"; 

$result = mysql_query($sql,$dbh);

?>
<hr color="black" height="2" width="70%">
<table align="center" class="table">

<tr>

<td class="table-title"><p >board</p></td>

<td width="600"><a href="index.php">board</a> | <a href="insert3.php">insert</a> | <a href="delete3.php">delete</a> | <a href="update3.php">update</a> | <a href="select3.php">select</a></td>

</tr>

</table>

<table width="800" border="1" align="center" cellpadding="1" cellspacing="1">

<tr>

<td width="100">number</td>

<td width="100">date</td>

<td width="100">mno</td>

<td width="100">nickname</td>

<td width="100">word</td>

</tr>

<?php

while($row=mysql_fetch_array($result))

{
?>

<tr>

<td width="100"><?php echo $row[0] ?></td>

<td width="100"><?php echo $row[1] ?></td>

<td width="100"><?php echo $row[2] ?></td>

<td width="100"><?php echo $row[3] ?></td>

<td width="100"><?php echo $row[4] ?></td>

</tr>

<?php

}

mysql_close($dbh);

?>


</table>


<?php

include("config.php");

$sql = "select * from viewboard"; 

$result = mysql_query($sql,$dbh);

?>
<hr color="black" height="2" width="70%">
<table align="center" class="table">

<tr>

<td class="table-title"><p >viewboard</p></td>

<td width="600"><a href="index.php">viewboard</a> | <a href="insert4.php">insert</a> | <a href="delete4.php">delete</a> | <a href="update4.php">update</a> | <a href="select4.php">select</a></td>

</tr>

</table>

<table width="800" border="1" align="center" cellpadding="1" cellspacing="1">

<tr>

<td width="100">number</td>

<td width="100">date</td>

<td width="100">word</td>

</tr>

<?php

while($row=mysql_fetch_array($result))

{
?>

<tr>

<td width="100"><?php echo $row[0] ?></td>

<td width="100"><?php echo $row[1] ?></td>

<td width="100"><?php echo $row[2] ?></td>

</tr>

<?php

}

mysql_close($dbh);

?>


</table>

</div>


</div>
<div style="background-color:#CCCCCC;">
<p style="text-align:center;font-size:50px;font-family:Arial;">Waiting for sponsors..</p>
</div>
</body>

</html>



