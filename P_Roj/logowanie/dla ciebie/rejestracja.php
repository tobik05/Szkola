<!DOCTYPE html>
<html lang="pl">
    <?php include("partials/head.php");?>
<body>
    <main>
            <h2>Rejestracja</h2>
            <form method="post">
                <input type="text" name="login" placeholder="Nick">
                <input type="password" name="haslo" placeholder="Hasło">
                <input type="submit" name="zarejestruj" value="Zarejestruj">
                <a href="logowanie.php">Zaloguj się</a>
            </form>
            <?php
            $pol=mysqli_connect("localhost","root","","sklep");
            if (isset($_POST['zarejestruj'])) {
                $login = $_POST['login'];
                $haslo = $_POST['haslo'];
                $zaszyfrowaneHaslo = password_hash($haslo, PASSWORD_BCRYPT);
                $stmt = $con->prepare("INSERT INTO users (login, haslo) VALUES (?, ?)");
                $stmt->bind_param("ss", $login, $zaszyfrowaneHaslo);
                if ($stmt->execute()) {
                    echo "Rejestracja zakończona sukcesem!";
                    $_SESSION['login'] = $row['login'];
                    exit(header("location:index.php"));
                } else {
                    echo "Błąd: " . $stmt->error;
                }
                $stmt->close();
                $con->close();
            }
            ?>
    </main>
</body>
</html>