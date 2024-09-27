
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
            <?php
                $con = mysqli_connect("localhost", "root", "", "ksiegarnia");
                $link = "http://localhost/Szkola/P%20Ciechan/zadania_strony/php-laczenie%20z%20baza";
                echo "<a class='button' href='$link/dodaj.php'>Dodaj</a>";
                ?>
                <form action="index.php" method="post" class="wyszukiwarka-form">
                    <input type="text" name="wyszukanie" placeholder="Wyszukaj" class="input">
                <select name="metoda" class="input">
                    <option value="autor" />Autora
                    <option value="tytul" />Tytułu
                    <option value="rok_wydania" />Roku wydania
                    <option value="isbn" />ISBN
                </select>
                <input type="submit" name="submit_szukanie" value="Wyszukaj">
                </form>
                <?php
                if(mysqli_connect_error()){
                    echo "Błąd połączenia: " . mysqli_connect_error();
                    exit();
                }else{
                    if(isset($_SESSION['blad'])){
                        echo '<div class=error>' .  $_SESSION['blad'] . '</div>';
                    } elseif(isset($_SESSION['dodano'])){
                        echo'<div class=success>' .  $_SESSION['dodano'] . '</div>';
                    }
                    if(isset($_POST['submit_szukanie'])){
                        $metoda = $_POST['metoda'];
                        $wyszukanie = $_POST['wyszukanie'];
                        $zapytanie = mysqli_query($con, "select * from ksiazki where $metoda = $wyszukanie");
                        echo "<table><tr><th>ID</th><th>Autor</th><th>Tytuł</th><th>Rok wydania</th><th>ISBN</th><th>Działanie</th></tr>";
                        while($wiersz = mysqli_fetch_array($zapytanie)){
                            echo "<tr>";
                            echo "<td>" . $wiersz[0] . "</td>" . "<td>" . $wiersz[1] . "</td>" . "<td>" . $wiersz[2] . "</td>" . "<td>" . $wiersz[3] . "</td>" .  "<td>" . $wiersz[4] . "</td>" . "<td><a class='button' href='$link/usun.php?id=$wiersz[0]'>Usuń</a><a class='button' href='$link/update.php?id=$wiersz[0]'>Akutalizuj</a></td>";
                            echo "</tr>";
                        }
                            
                    }else{
                        $zapytanie2 = mysqli_query($con, "select * from ksiazki");
                        echo "<table><tr><th>ID</th><th>Autor</th><th>Tytuł</th><th>Rok wydania</th><th>ISBN</th><th>Działanie</th></tr>";
                        while($wiersz = mysqli_fetch_array($zapytanie2)){
                            echo "<tr>";
                            echo "<td>" . $wiersz[0] . "</td>" . "<td>" . $wiersz[1] . "</td>" . "<td>" . $wiersz[2] . "</td>" . "<td>" . $wiersz[3] . "</td>" .  "<td>" . $wiersz[4] . "</td>" . "<td><a class='button' href='$link/usun.php?id=$wiersz[0]'>Usuń</a><a class='button' href='$link/update.php?id=$wiersz[0]'>Akutalizuj</a></td>";
                            echo "</tr>";
                        }
                    }
                }
                mysqli_close($con)
            ?>
        </main>
    </body>
</html>
