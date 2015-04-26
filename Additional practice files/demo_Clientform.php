<?php

define('DB_NAME', 'ContactForm');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');
define('DB_HOST', 'localhost');

$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
if (!$link) {
	die('Could not connect:'. mysql_error());
}

$db_selected = mysql_select_db (DB_NAME, $link);

if (!$db_selected) {
	die('Can\'t use ' . DB_NAME . ': '. mysql_error());
}

$value1 = $_POST ['firstName'];
$value2 = $_POST ['lastName'];

$sql = "INSERT INTO Client Contact Information (firstName, lastName) VALUES ('$value1','$value2')";

if(!mysql_query($sql)) {
	die('Error: ' . mysql_error());
	}

mysql_close();

?>