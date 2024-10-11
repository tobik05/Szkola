<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Technikum</title>
        <link rel="stylesheet" href="style.css">
        <link rel="icon" href="logo.png">
    </head>
<body>
<script src="https://kit.fontawesome.com/ef5f951ae9.js" crossorigin="anonymous"></script>
    <script src="script.js"></script>
        <header>
            <h3>Powiatowy Zespół Szkół w Świebodzinie</h3>
        </header>
    <main>
        <section class="left_side">
            <form action="" method="post">
            <?php
            $con = mysqli_connect("localhost", "root", "", "technikum");
            $zapytanie = mysqli_query($con, "SELECT DISTINCT klasa from uczen");
            echo "<select name='wyborklasy'>";
            while($wiersz = mysqli_fetch_array($zapytanie)){
                echo "<option>" . $wiersz['klasa'] . "</option>";
            }
            echo "</select>";
            mysqli_close($con);
            ?>
            <input type="submit" value="Pokaż uczniów" name="pokaz">
            </form>
            <form method="post" class="ulozone">
                <input type="text" name="wiek_od" placeholder="OD">
                <input type="text" name="wiek_do" placeholder="OD">
                <input type="submit" name="wiek">
            </form>
        </section>
        <section class="right_side">
            <?php
                if(isset($_POST['wiek'])){
                    $od = $_POST['wiek_od'];
                    $do = $_POST['wiek_do'];
                    $con = mysqli_connect("localhost", "root", "", "technikum");
                    $zapytanie = mysqli_query($con, "SELECT * from uczen where wiek = ");
                    echo "<ol>";
                    echo "<h3>" . $klasa . "</h3>";
                    while($wiersz = mysqli_fetch_array($zapytanie)){
                        echo "<li>" . $wiersz['imie'] . " " . $wiersz['nazwisko'] . " " . $wiersz['wiek'] .  "</li>";
                    }
                    echo "</ol>";
                    mysqli_close($con);
                }
                if(isset($_POST['wyszukanie'])){
                    $metoda = $_POST['metoda'];
                    $wartosc = $_POST['wartosc'];
                    echo $metoda . $wartosc;
                    $con = mysqli_connect("localhost", "root", "", "technikum");
                    $zapytanie = mysqli_query($con, "SELECT * from uczen where $metoda = $wartosc");
                    echo "<ol>";
                    echo "<h3>" . $wiersz['klasa'] . "</h3>";
                    while($wiersz = mysqli_fetch_array($zapytanie)){
                        echo "<li>" . $wiersz['imie'] . " " . $wiersz['nazwisko'] . " " . $wiersz['wiek'] . "</li>";
                    }
                    echo "</ol>";
                    mysqli_close($con);
                }
                /*
                <form action="" method="post" class="ulozone">
                <select name="metoda" id="">
                    <option value="imie">Imię</option>
                    <option value="imie">Nazwisko</option>
                    <option value="imie">Wiek</option>
                </select>
                <input type="text" name="wartosc" placeholder="Podaj słowo klucz według metody">
                <input type="submit" value="Pokaż uczniów" name="wyszukanie">
            </form>
                if(isset($_POST['wyszukanie'])){
                    $metoda = $_POST['metoda'];
                    $wartosc = $_POST['wartosc'];
                    echo $metoda . $wartosc;
                    $con = mysqli_connect("localhost", "root", "", "technikum");
                    $zapytanie = mysqli_query($con, "SELECT * from uczen where $metoda = $wartosc");
                    echo "<ol>";
                    echo "<h3>" . $wiersz['klasa'] . "</h3>";
                    while($wiersz = mysqli_fetch_array($zapytanie)){
                        echo "<li>" . $wiersz['imie'] . " " . $wiersz['nazwisko'] . " " . $wiersz['wiek'] . "</li>";
                    }
                    echo "</ol>";
                    mysqli_close($con);
                }
                    */
            ?>
        </section>
    </main>
    <footer>
        <h3>Stronę wykonał Tobiasz Bielawski</h3>
    </footer>
</body>
</html>