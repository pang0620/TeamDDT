<?php

include_once("connect.php");

$sql = "SELECT * FROM db_table";

$result = $conn->query($sql);

if(isset($result) && $result->num_rows>0) {
	while($row = $result->fetch_assoc()) {
		$id = $row['id'];
		$temp = $row['db_temp'];
		$humid = $row['db_humid'];
		$prob = $row['db_prob'];
		$prec = $row['db_prec'];
		$dust = $row['db_dust'];
		$date = $row['date'];
	}
} else echo "no results found>";
?>
