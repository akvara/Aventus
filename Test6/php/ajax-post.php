<?php
require('config.php');

if($_POST['action'] === "add") {
    $conn = new mysqli($servername, $username, $password);
    $conn->select_db($database);
    $nameVal = $conn->real_escape_string($_POST['name']);
    $commentVal = $conn->real_escape_string($_POST['comment']);

    $sql = "INSERT INTO $table (`name`, `text`, `date`) VALUES (\"$nameVal\", \"$commentVal\", NOW())";

    if ($conn->query($sql) === TRUE) {
        echo "ok";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}

if($_POST['action'] === "delete") {
    $conn = new mysqli($servername, $username, $password);
    $conn->select_db($database);

    $idVal = $conn->real_escape_string($_POST['id']);

    $sql = "DELETE FROM $table WHERE id=" . $idVal;

    if ($conn->query($sql) === TRUE) {
        echo "Deleted";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}

?>
