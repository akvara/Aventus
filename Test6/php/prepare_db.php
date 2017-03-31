<?php
require('config.php');
require('LoremIpsum.php');

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

$sql = "";

for ($i = 0; $i < 36; $i++) {
    $word = get_word();
    $sentence = get_sentence();
    $sql .= "INSERT INTO $table (`name`, `text`, `date`) VALUES ('$word', '$sentence', NOW());";

}

if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . PHP_EOL . $conn->error;
}

$conn->close();

?>
