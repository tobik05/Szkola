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
    <a href="login.php" class="button">Zaloguj sie</a>
    <a href="rejestracja.php" class="button">Rejestracja</a>
    <a href="strona.php" class="button">Strona zablokowana 
        <?php if(isset($_SESSION['zalogowany'])){
            echo " - masz dostęp";
        } else echo " -  nie masz dostępu";
        ?>
    </a>
    <a href="wyloguj.php" class="button">Wyloguj sie</a>
</body>
</html>