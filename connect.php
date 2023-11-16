<?php
$server = "localhost:3306";
$user = "admin";
$password = "2794";
$dbname = "db";

$conn = new mysqli($server, $user, $password, $dbname);

if ($conn->connect_error) echo "<h2>접속 실패</h2>";
else echo "<h2>접속 성공</h2>";
