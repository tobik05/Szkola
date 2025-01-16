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
            <form action="dodaj.php" method="post" class="form">
                <input type="text" class="input" placeholder="Autor" required name="autor">
                <input type="text" class="input" placeholder="Tytuł" required name="tytul">
                <input type="number" class="input" placeholder="Rok wydania" required name="rok">
                <input type="number" class="input" placeholder="ISBN" required maxlength="13" minlength="13" name="isbn">
                <input type="submit" name="submit" value="Dodaj">
                <a href="index.php" class="button">Wróć</a>
            </form>
        <?php
            $con = mysqli_connect("localhost", "root", "", "ksiegarnia");
            $link = "http://localhost/Szkola/P%20Ciechan/zadania_strony/php-laczenie%20z%20baza";
            if(mysqli_connect_error()){
                $_SESSION['blad'] = "Błąd połączenia (usun): " . mysqli_connect_error();
                exit();
            }else{
                if(isset($_POST["submit"])){
                    $autor=$_POST["autor"];
                    $tytul=$_POST["tytul"];
                    $rok=$_POST["rok"];
                    $isbn=$_POST["isbn"];
                    $zapytanie = mysqli_query($con, "insert into ksiazki(autor, tytul, rok_wydania, isbn) value('$autor', '$tytul', '$rok', '$isbn')");
                    header("Location: index.php");
                    $_SESSION['dodano']="Dodano książkę";
                }
            }
            mysqli_close($con)
        ?>
        </main>
    </body>
</html>
