<?php
require('config.php');

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully" . PHP_EOL;

$conn->query("DROP DATABASE $database");

// Select DB

if (!$conn->select_db($database)) {
    // Create database
    echo "Creating database $database" . PHP_EOL;
    if ($conn->query("CREATE DATABASE $database") === TRUE) {
        echo "Database created successfully". PHP_EOL;
        $conn->select_db($database);
    } else {
        echo "Error creating database: " . $conn->error . PHP_EOL;
    }
}

// sql to create table
$sql = <<<SQL
CREATE TABLE IF NOT EXISTS 
  $table 
  (`id` INT AUTO_INCREMENT primary key NOT NULL, 
   `name` VARCHAR(20), 
   `text` TEXT NOT NULL, 
   `date` DATETIME 
   );
SQL;


if ($conn->query($sql) === TRUE) {
    echo "Table $table created successfully". PHP_EOL;
} else {
    echo "Error creating table: " . $conn->error . PHP_EOL;
}

$conn->close();

?>