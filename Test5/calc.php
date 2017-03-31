<?php
require('config.php');

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully" . PHP_EOL;

// Select DB

$conn->select_db($database);

$sql = <<<SQL
  SELECT DISTINCT * 
    FROM $table a
      JOIN
      ( SELECT * FROM $table) b
        ON (b.x = a.x AND b.y = a.y AND b.car != a.car) 
      ORDER BY a.x, a.y;
SQL;

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo $row["x"] . "  " .  $row["y"] . "  " .  $row["car"] . PHP_EOL;
    }
} else {
    echo "0 results";
}

$conn->close();

?> 