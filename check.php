<?php
# connecting DB
include_once("connect.php");

# reading form
$temp = $_POST["temp"];
$humid = $_POST["humid"];
$prob = $_POST["prob"];
$prec = $_POST["prec"];
$dust = $_POST["dust"];
$date = date('Y-m-d H:i:s', $phptime);

echo "{$temp}, {$humid}, {$prob}, {$prec}, {$dust}";

$sql = "INSERT INTO db_table(db_temp, db_humid, db_prob, db_prec, db_dust, date) VALUES('$temp', '$humid', '$prob', '$prec', '$dust', '$date'";
	#how id&date?

if($conn->query($sql)) echo "<h3>Success</h3>";
else echo "<h3>Fail</h3>";

?>
