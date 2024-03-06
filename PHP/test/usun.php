<?php 
    $id = $_GET['id'];
    $conn = mysqli_connect("localhost", "root", "", ) or die(mysqli_error($conn));
    $db_select = mysqli_select_db($conn, "test") or die(mysqli_error($conn));
    $sql = "ALTER TABLE mieszkancy DROP COLUMN WHERE {$id};";
    $result = $conn->query($sql);
    $row = mysqli_num_rows($result);
    if ($result == true ) {
        header();
    } else{

    }
?>