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
$sql = "SELECT * FROM tablename3 ORDER BY id DESC ";
$result = $mysqli->query($sql);
$mysqli->close();
?>



<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Display SQL Databe Entries</title>
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
		<h1>Databe Entries</h1>
		<!-- TABLE CONSTRUCTION-->
		<table>
			<tr>
				<th>Title</th>
				<th>Link</th>
				<th>Media</th>
				<th>Description</th>
				<th>Content</th>
				<th>PubDate</th>
			</tr>
			<!-- PHP CODE TO FETCH DATA FROM ROWS-->
			<?php // LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<!--FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN
					(title, link, media, meta_description, content, pubDate)
				--> 
				<td><?php echo $rows['title'];?></td>
				<td><?php echo $rows['link'];?></td>
				<td><?php echo $rows['media'];?></td>
				<td><?php echo $rows['meta_description'];?></td>
				<td><?php echo $rows['content'];?></td>
				<td><?php echo $rows['pubDate'];?></td>
			</tr>
			<?php
				}
			?>
		</table>
	</section>
</body>

</html>
