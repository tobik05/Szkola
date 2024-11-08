<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $con=mysqli_connect("localhost","root","","users");
    session_start();
    if(isset($_SESSION['error'])){
        echo $_SESSION['error'];
    }
    if(isset($_SESSION['zalogowany'])){
        echo "<h1 class='succes'>Jesteś zalogowany</h1>";
    }else{
        echo "<h1 class='error'>Nie jesteś zalogowany</h1>";
    }
    ?>
    <form method="post" class="pion">
        <?php 
        if(isset($_SESSION['error_logowanie'])){
            echo "<p class='error'>".$_SESSION['error_logowanie']."</p>";
        }
        ?>
        <h1 style="color: var(--glowny);">LOGOWANIE</h1>
        <input type="text" name="login" placeholder="Login" required>
        <input type="password" name="haslo" placeholder="Hasło" required>
        <input type="submit" class="button" name="zaloguj" value="Zaloguj">
        <section class="poziom" style="margin-top: 20px;">
            <a href="index.php" class="button small-button">Wróć</a>
            <a href="rejestracja.php" class="button small-button">Rejestracja</a>
        </section>
    </form>
    <?php 
    if (isset($_POST['zaloguj'])) {
        $login = $_POST['login'];
        $haslo = $_POST['haslo'];
        $stmt = $con->prepare("SELECT * FROM users WHERE login = ?");
        $stmt->bind_param("s", $login);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            if (password_verify($haslo, $row['haslo'])) {
                $_SESSION['zalogowany'] = "tak";
                $_SESSION['nick'] = $login;
                unset($_SESSION['error']);
                exit( header("Location: index.php?debug=".session_id()));
            } else {
                $_SESSION['error_logowanie']="<h3 class='error'>Niepoprawne hasło</h1>";
            }
        } else {
            $_SESSION['error_logowanie']="<h1 class='error'>Niepoprawny login</h1>";
        }
        $stmt->close();
    }
    $con->close();
    ?>
</body>
</html>