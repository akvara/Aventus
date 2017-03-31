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
$sql = "CREATE TABLE IF NOT EXISTS $table (x INT(6), y INT(6), car VARCHAR(1) NOT NULL)";

if ($conn->query($sql) === TRUE) {
    echo "Table $table created successfully". PHP_EOL;
} else {
    echo "Error creating table: " . $conn->error . PHP_EOL;
}

$sql = <<<SQL
    INSERT INTO $table (x, y, car) VALUES 
     (1, 2, 'A'),
     (5, 3, 'B'),
     (4, 6, 'C'),
     (1, 2, 'D'),
     (7, 7, 'E'),
     (4, 6, 'F'),
     (5, 3, 'B'),
     (9, 4, 'H'),
     (4, 6, 'F');
SQL;

if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . PHP_EOL . $conn->error;
}

$conn->close();

?> 