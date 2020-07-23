<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db_name = 'news_db';

$conn = new MySQLi($host, $user, $pass, $db_name);

if ($conn->connect_error) {
  die('Database cnnection error: ' . $conn->connect_error);
}
