<?php include("partials/polaczenie_baza.php")?>
<!DOCTYPE html>
<html lang="pl">
    <?php include("partials/head.php");?>
<body>
<script src="https://kit.fontawesome.com/ef5f951ae9.js" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <main>
        <section>
            <?php
            $poziom=$_SESSION["poziom"];
            if($poziom==100){
                include("partials/admin_side_menu.php");
            }else if($poziom==50){
                include("partials/manager_side_menu.php");
            }
            else{
                include("partials/user_side_menu.php");
            }
            ?>
            <section>
                <h2>Logowanie</h2>
                <form action="" method="post">
                    <input type="text" name="login" placeholder="Nick">
                    <input type="password" name="haslo" placeholder="Hasło">
                    <input type="submit" name="loguj" value="Zaloguj" class='button'>
                </form>
                <?php
                if (isset($_POST['loguj'])) { // Zmiana na 'loguj'
                    $login = $_POST['login'];
                    $haslo = $_POST['haslo'];

                    // Przygotowanie zapytania
                    $stmt = $con->prepare("SELECT * FROM users WHERE login = ?");
                    $stmt->bind_param("s", $login);
                    $stmt->execute();
                    $result = $stmt->get_result();

                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        // Weryfikacja hasła
                        if (password_verify($haslo, $row['haslo'])) {
                            $_SESSION['login'] = $row['login'];
                            $_SESSION['poziom'] = $row['poziom'];
                            exit( header("Location: index.php?debug=".session_id()));
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
            </section>
    </main>
    <?php include("partials/footer.php")?>
</body>
</html>