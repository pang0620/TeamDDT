<?php

include_once("connect.php");

$sql = "SELECT * FROM db_table";

$result = $conn->query($sql);

if(isset($result) && $result->num_rows>0) {
	while($row = $result->fetch_assoc()) {
		echo "id: ".$row['id']." ";
		echo "temp: ".$row['db_temp']." ";
		echo "humid: ".$row['db_humid']." ";
		echo "prob: ".$row['db_prec']." ";
		echo "prec: ".$row['db_prec']." ";
		echo "dust: ".$row['db_dust']." ";
		echo "date: ".$row['date']."<hr>";
	}
} else echo "no results found>";

?>
