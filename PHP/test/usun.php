<?php 
    session_start();
    $id = $_GET['id'];
    $conn = mysqli_connect("localhost", "root", "", ) or die(mysqli_error($conn));
    $db_select = mysqli_select_db($conn, "test") or die(mysqli_error($conn));
    $sql = "DELETE FROM mieszkancy WHERE id=$id;";
    $result = $conn->query($sql);
    if ($result == true ) {
        $_SESSION['delete'] = "<div class='success'>Usunięto wiersz.</div>";
        header("location:index.php");
    } else{
        $_SESSION['delete'] = "<div class='error'>Próba usunięcia wiersza nie powiodła się.</div>";
        header('location:'."index.php");
    }
?>