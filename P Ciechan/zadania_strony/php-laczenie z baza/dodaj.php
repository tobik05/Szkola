<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="Tobiasz, Bielawski, Strony, PHP">
        <meta name="author" content="Tobiasz Bielawski">
        <link rel="stylesheet" href="style.css">
        <link rel="icon" type="image/x-icon" href="logo.png">
        <title>Tobiasz Bielawski</title>
    </head>
    <body>
        <main>
            <form action="dodaj.php" method="post">
                <input type="text" class="input" placeholder="Imię" max="20" min="2" required name="imie">
                <input type="text" class="input" placeholder="Nazwisko" max="30" min="2" required name="nazwisko">
                <input type="text" class="input" placeholder="Klasa" min="3" max="3" required name="klasa">
                <input type="submit" name="submit" value="Dodaj">
                <a href="index.php" class="button">Wróć</a>
            </form>
        <?php
            $con = mysqli_connect("localhost", "root", "", "szkola");
            $link = "http://localhost/Szkola/P%20Ciechan/zadania_strony/php-laczenie%20z%20baza";
            if(mysqli_connect_error()){
                $_SESSION['blad'] = "Błąd połączenia (usun): " . mysqli_connect_error();
                exit();
            }else{
                if(isset($_POST["submit"])){
                    $imie=$_POST["imie"];
                    $nazwisko=$_POST["nazwisko"];
                    $klasa=$_POST["klasa"];
                    $zapytanie = mysqli_query($con, "insert into uczniowie(imie, nazwisko, klasa) value('$imie', '$nazwisko', '$klasa')");
                    header("Location: index.php");
                }
            }
            mysqli_close($con)
        ?>
        </main>
    </body>
</html>
