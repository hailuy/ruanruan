<?php
		$host = "mysql.hostinger.co.uk";
		$username = "u745952349_root";
		$password = "isaacnewton";
		$dbName = "u745952349_p2";
		$conn = mysql_connect($host, $username, $password) or die("Unable to locate DBMS.");
		$db = mysql_select_db($dbName, $conn) or die("Unable to locate DB.");
?>
<html>

<head>
	<title>PHP Page</title>
</head>

<body>
<form action="lab7a.php" method="POST">
	<select id="contracts" name="contracts">
		<?php
			$sql = "SELECT contracttypeno, description FROM contracttype ORDER BY contracttypeno";
			$results = mysql_query($sql);
			while($row = mysql_fetch_array($results)){
				$id = $row["contracttypeno"];
				$name = $row["description"];
				echo "<option value=\"$id\">$name</option>";
			}
		?>
	</select>
	
	<input type="submit" value="send" />

</form>

<?php
	if(isset($_POST["contracts"])){
		$contract = $_POST["contracts"];
		
		$sql = "SELECT * FROM contracttype WHERE contracttypeno = $contract;";
		$result = mysql_query($sql);
		echo "<table border=\"2px\">";
		echo "<tr>";
			echo "<td>Contract Type #</td>";
			echo "<td>Description</td>";
			echo "<td>Monthly Cost</td>";
			echo "<td>Free Phone</td>";
		echo "</tr>";
		while($row = mysql_fetch_array($result)){
			echo "<tr>";
			echo "<td>".$row["contracttypeno"]."</td>";
			echo "<td>".$row["description"]."</td>";
			echo "<td>&euro;".$row["monthlycost"]."</td>";
			$free = "";
			if($row["freephone"] == 1) $free = "Yes";
			else $free = "No";
			echo "<td>$free</td>";
			echo "</tr>";	
		}
		echo "</table>";
	}
		
?>

</body>

</html>

