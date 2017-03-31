<?php
require('config.php');

if ($_GET['action'] == "count") {

    $conn = new mysqli($servername, $username, $password);
    $conn->select_db($database);

    $sql = "SELECT COUNT(*) FROM $table";

    $result = $conn->query($sql);
    $row = $result->fetch_row();

    print json_encode([intval($row[0]), $per_page]);

    $conn->close();
}

if ($_GET['action'] == "page") {

    $conn = new mysqli($servername, $username, $password);
    $conn->select_db($database);
    $page_no = $conn->real_escape_string($_GET['page_no']);
    $starting = ($page_no - 1) * $per_page;

    $sql = "SELECT * FROM $table ORDER BY `date` DESC LIMIT $starting, $per_page";

    $result = $conn->query($sql);
    while($row = mysqli_fetch_assoc($result))
        $rows[] = $row;
    print json_encode($rows);

    $conn->close();
}

?>
