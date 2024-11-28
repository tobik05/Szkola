<!DOCTYPE html>
<html lang="pl">
    <?php include("partials/head.php");?>
<body>
    <main>
        <section class="form">
            <h2>Logowanie</h2>
            <form class="pion" method="post">
                <input type="text" name="login" placeholder="Nick">
                <input type="password" name="haslo" placeholder="Hasło">
                <input type="submit" name="loguj" value="Zaloguj" class='button'>
            </form>
            <?php
            if (isset($_POST['loguj'])) {
                $login = $_POST['login'];
                $haslo = $_POST['haslo'];

                $stmt = $con->prepare("SELECT * FROM users WHERE login = ?");
                $stmt->bind_param("s", $login);
                $stmt->execute();
                $result = $stmt->get_result();

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    if (password_verify($haslo, $row['haslo'])) {
                        $_SESSION['login'] = $row['login'];
                        $_SESSION['poziom'] = $row['poziom'];
                        exit( header("Location: index.php"));
                    } else {
                        echo "Niepoprawne hasło";
                    }
                } else {
                    echo "Niepoprawny login";
                }
                $stmt->close();
            }
            $con->close();
            ?>
    </main>
    <?php include("partials/footer.php")?>
</body>
</html>