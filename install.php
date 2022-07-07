<?php require_once('config.php') ?>
<?php

$connection = new PDO($dsn, $dbuser, $dbpassword, $options);
$sql = "CREATE TABLE IF NOT EXISTS ideastable (
	id INT UNSIGNED AUTO_INCREMENT,
    title VARCHAR(40) NOT NULL,
    text TEXT NOT NULL,
    PRIMARY KEY(id)
);";
$connection->exec($sql);
echo "You are connected to the database successfully";
?>
