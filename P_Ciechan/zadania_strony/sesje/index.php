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
    //wyswietlanie sesji error jesli istnieje jakis blad, np niepoprawne dane logowania czy cos
    if(isset($_SESSION['error'])){
        echo $_SESSION['error'];
    }

    //jesli jest zalogowany to wyswietli nick 
    if(isset($_SESSION['zalogowany'])){
        echo "<h1 class='succes'>Jesteś zalogowany jako: ".$_SESSION['login']."</h1>";
    }else{
        echo "<h1 class='error'>Nie jesteś zalogowany</h1>";
    }

    //liczniki odwiedzin
    if(!isset($_SESSION['odwiedziny'])){
        $_SESSION['odwiedziny']=0;
    }
    $_SESSION['odwiedziny']++;
    echo "<p>Jesteś tutaj poraz: ".$_SESSION['odwiedziny'].".</p>";
    ?>
    

    <a href="login.php" class="button">Zaloguj sie</a>
    <a href="rejestracja.php" class="button">Rejestracja</a>
    <a href="strona.php" 
        <?php if(isset($_SESSION['zalogowany'])){
            echo "class='button'>Strona zablokowana - masz dostęp";
        } else echo "class='button'>Strona zablokowana -  nie masz dostępu";
        ?>
    </a>
    <a href="wyloguj.php" class="button">Wyloguj sie</a>
</body>
</html>