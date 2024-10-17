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
                if (isset($_POST['submit'])) {
                    $login = $_POST['login'];
                    $haslo = $_POST['haslo'];
                    $sql = "SELECT * FROM users WHERE login";
                    $stmt = mysqli_prepare($con, $sql);
                    mysqli_stmt_bind_param($stmt, "ss", $email, $email);
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);
            
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    $count = mysqli_num_rows($result);
            
                    if ($count == 1) {
                        if (password_verify($password, $row['haslo'])) {
                            $_SESSION['login'] = $row['login'];
                            $_SESSION['poziom'] = $row['poziom'];
                            exit(header("location:index.php?debug=".session_id()));
                        } else {
                            $error_message = "Niepoprawne hasło";
                        }
                    } else {
                        $error_message = "Niepoprawny email lub nick";
                    }
                    mysqli_stmt_close($stmt);
                }
            ?>
            </section>
    </main>
    <?php include("partials/footer.php")?>
</body>
</html>