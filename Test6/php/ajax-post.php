<?php
require('config.php');

if($_POST['action'] == "add") {
    $conn = new mysqli($servername, $username, $password);
    $conn->select_db($database);
    $nameVal = $_POST['name'];
    $commentVal = $_POST['comment'];

    $sql = "INSERT INTO $table (`name`, `text`, `date`) VALUES (\"$nameVal\", \"$commentVal\", NOW())";

    if ($conn->query($sql) === TRUE) {
        echo "ok";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}

//if($_POST['action'] == "read") {
//    $conn = new mysqli($servername, $username, $password);
//    $conn->select_db($database);
//
//    $sql = "SELECT * FROM $table";
//
//    if ($conn->query($sql) === TRUE) {
//        echo json_encode($conn->query($sql)->fetch_all());
//    } else {
//        echo "Error: " . $conn->error;
//    }
//
//    $conn->close();
//}

?>
