<?php

	include_once(dirname( dirname(__FILE__) ) . '/config/errors.php');
	include_once(dirname( dirname(__FILE__) ) . '/sql/connect_mysql.php');
	include_once(dirname( dirname(__FILE__) ) . '/config/sql_conf.php');

	$conf = new SqlConf();

	$dbname = $conf->getDatabase();
	$tableName = $conf->getTableName();
	$conn = connectMysql();
	$conn -> select_db("$dbname");

	$sql = "SELECT id, title, link, media, meta_description, content, pubDate FROM $tableName ORDER BY id DESC ";
	$result = $conn->query($sql);
	$conn->close();

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Display SQL Databe Entries</title>
	<style>
		table {
			margin: 0 auto;
			font-size: large;
			border: 2px solid black;
		}

		h1 {
			text-align: center;
			color: #04075e;
			font-size: xx-large;
			font-family: "Times New Roman", Times, serif;
		}

		td {
			background-color: #dbe0ff;
			border: 1px solid black;
		}

		th,
		td {
			font-weight: bold;
			border: 1px solid black;
			padding: 9px;
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
		<table>
			<tr>
				<th>Title</th>
				<th>Link</th>
				<th>Media</th>
				<th>Description</th>
				<th>Content</th>
				<th>PubDate</th>
			</tr>

			<?php
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
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
