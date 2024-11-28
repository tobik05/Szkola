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
            if(isset($_SESSION['poziom'])){
                $poziom=$_SESSION['poziom'];
            }else{
                $poziom=0;
            }
            if($poziom==100){
                include("partials/admin_side_menu.php");
            }else if($poziom==50){
                include("partials/manager_side_menu.php");
            }
            else{
                include("partials/user_side_menu.php");
            }
            ?>
            <section class="form">
                <h2>Logowanie</h2>
                <form class="pion" method="post">
                    <input type="text" name="login" placeholder="Nick">
                    <input type="password" name="haslo" placeholder="Hasło">
                    <input type="submit" name="rejestruj" value="Zarejestruj" class='button'>
                    <a class="button small-button" href="logowanie.php">Zaloguj się</a>
                </form>
                <?php
                if (isset($_POST['rejestruj'])) {
                    $login = $_POST['login'];
                    $haslo = $_POST['haslo'];

                    $zaszyfrowaneHaslo = password_hash($haslo, PASSWORD_BCRYPT);

                    $stmt = $con->prepare("INSERT INTO users (login, haslo) VALUES (?, ?)");
                    $stmt->bind_param("ss", $login, $zaszyfrowaneHaslo);

                    if ($stmt->execute()) {
                        echo "Rejestracja zakończona sukcesem!";
                        $_SESSION['login'] = $row['login'];
                        exit(header("location:index.php?debug=".session_id()));
                    } else {
                        echo "Błąd: " . $stmt->error;
                    }

                    $stmt->close();
                    $con->close();
                }
                ?>
            </section>
    </main>
    <?php include("partials/footer.php")?>
</body>
</html>