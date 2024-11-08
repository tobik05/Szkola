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
    ?>
    <form method="post" class="pion">
        <?php 
        if(isset($_SESSION['error_rejestracja'])){
            echo "<p class='error'>".$_SESSION['error_rejestracja']."</p>";
        }
        ?>
        <h1 style="color: var(--glowny);">REJESTRACJA</h1>
        <input type="text" name="login" placeholder="Login" required>
        <input type="password" name="haslo" placeholder="Hasło" required>
        <input type="submit" class="button" name="rejestruj" value="Rejestruj">
        <section class="poziom" style="margin-top: 20px;">
            <a href="index.php" class="button small-button">Wróć</a>
            <a href="login.php" class="button small-button">Logowanie</a>
        </section>
    </form>
    <?php 
    if (isset($_POST['rejestruj'])) {
        $login = $_POST['login'];
        $haslo = $_POST['haslo'];
    
        $zaszyfrowaneHaslo = password_hash($haslo, PASSWORD_BCRYPT);
    
        $stmt = $con->prepare("INSERT INTO users (login, haslo) VALUES (?, ?)");
        $stmt->bind_param("ss", $login, $zaszyfrowaneHaslo);
    
        if ($stmt->execute()) {
            $_SESSION['zalogowany'] = "tak";
            $_SESSION['nick'] = $login;
            unset($_SESSION['error']);
            $_SESSION['zarejestrowano']="Rejestracja zakończona sukcesem!";
            exit(header("location:index.php?debug=".session_id()));
        } else {
            $_SESSION['error']="Błąd: " . $stmt->error;
        }
    
        $stmt->close();
        $con->close();
    }
    ?>
</body>
</html>