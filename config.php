<?php
$hostname = "localhost";
$dbname = "ideas";
$dbuser = "root";
$dbpassword = "";
$dsn = "mysql:host=$hostname;dbname=$dbname";
$options = array(
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
);
