<?php
include("partials/polaczenie_baza.php");
//if (isset($_POST['rejestruj'])) {
    // Pobranie danych użytkownika z formularza
    $login = $_POST['login'];
    $haslo = $_POST['haslo'];

    $zaszyfrowaneHaslo = password_hash($haslo, PASSWORD_BCRYPT);

    $stmt = $con->prepare("INSERT INTO users (login, haslo) VALUES (?, ?)");
    $stmt->bind_param("ss", $login, $zaszyfrowaneHaslo);

    if ($stmt->execute()) {
        echo "Rejestracja zakończona sukcesem!";
        exit(header("location:index.php?debug=".session_id()));
    } else {
        echo "Błąd: " . $stmt->error;
    }

    $stmt->close();
    $con->close();
//}
?>