<?php

ini_set('display_errors', 1);
ini_set('log_erros',1);
ini_set('error_log', dirname( dirname(__FILE__) ) . 'logs/log.txt');



// Username is root
$user = 'root';
$password = 'password';

// Database name is gfg
$database = 'saglikdb';

// Server is localhost with
// port number 3308
$servername='localhost:3306';
$mysqli = new mysqli($servername, $user, $password, $database);

// Checking for connections
if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

// SQL query to select data from database
$sql = "SELECT * FROM rsslist ORDER BY id DESC ";
$result = $mysqli->query($sql);
$mysqli->close();
?>



<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>GFG User Details</title>
	<!-- CSS FOR STYLING THE PAGE -->
	<style>
		table {
			margin: 0 auto;
			font-size: large;
			border: 1px solid black;
		}

		h1 {
			text-align: center;
			color: #006600;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
		}

		td {
			background-color: #E4F5D4;
			border: 1px solid black;
		}

		th,
		td {
			font-weight: bold;
			border: 1px solid black;
			padding: 10px;
			text-align: center;
		}

		td {
			font-weight: lighter;
		}
	</style>
</head>

<body>
	<section>
		<h1>MONITOR DATABSE</h1>
		<!-- TABLE CONSTRUCTION-->
		<table>
			<tr>
				<th>GFG UserHandle</th>
				<th>Practice Problems</th>
				<th>Coding Score</th>
				<th>GFG Articles</th>
			</tr>
			<!-- PHP CODE TO FETCH DATA FROM ROWS-->
			<?php // LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<!--FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN-->
				<td><?php echo $rows['title'];?></td>
				<td><?php echo $rows['description'];?></td>
				<td><?php echo $rows['content'];?></td>
				<td><?php echo $rows['link'];?></td>
			</tr>
			<?php
				}
			?>
		</table>
	</section>
</body>

</html>
