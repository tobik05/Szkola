<?php 
    session_start();
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $miasto = $_POST['miasto'];
    $ulica = $_POST['ulica'];
    $conn = mysqli_connect("localhost", "root", "", ) or die(mysqli_error($conn));
    $db_select = mysqli_select_db($conn, "test") or die(mysqli_error($conn));
    $sql = "INSERT INTO mieszkancy (imie, nazwisko, miasto, ulica)  VALUES('$imie', '$nazwisko', '$miasto', '$ulica');";
    $result = $conn->query($sql);
    if ($result == true ) {
        $_SESSION['dodaj'] = "<div class='success'>Dodano wiersz.</div>";
        header("location:index.php");
    } else{
        $_SESSION['dodaj'] = "<div class='error'>Próba Dodania wiersza nie powiodła się.</div>";
        header('location:'."index.php");
    }
?>