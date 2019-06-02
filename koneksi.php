<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'maindb';
$dbdsn = "mysql:dbname=$dbname;host=$dbhost";
try {
	$db = new PDO($dbdsn, $dbuser, $dbpass);
} catch (PDOException $e) {
	echo 'Connection failed: ' . $e->getMessage();
}