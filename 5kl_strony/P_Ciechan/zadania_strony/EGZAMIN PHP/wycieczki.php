<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Wycieczki po Europie</title>
    <link rel="stylesheet" href="styl4.css">
</head>
<body>
    <header>
        <h1>BIURO TURYSTYCZNE</h1>
    </header>
    <section class="dane">
        <h3>Wycieczki na które są wolne miejsca</h3>
        <ul>
            <?php
            $con = mysqli_connect("localhost", "root", "", "biuro");
            $zapytanie=mysqli_query($con, "SELECT id, dataWyjazdu, cel, cena from wycieczki WHERE dostepna=1;");
            while($wiersz=mysqli_fetch_array($zapytanie)){
                echo "<li>" . $wiersz['id'] . ". dnia " . $wiersz['dataWyjazdu'] . " jedziemy do " . $wiersz['cel'] . " cena:" . $wiersz['cena'] . "</li>";
            };
            ?>
        </ul>
    </section>
    <aside class="lewy">
        <h2>Bestselery</h2>
        <table>
            <tr><td>Wenecja</td><td>kwiecień</td></tr>
            <tr><td>Londyn</td><td>lipiec</td></tr>
            <tr><td>Rzym</td><td>wrzesień</td></tr>
        </table>
    </aside>
    <section class="srodkowy">
        <h2>Nasze zdjęcia</h2>
        <?php
        $zapytanie2=mysqli_query($con, "SELECT nazwaPliku,podpis FROM `zdjecia` ORDER BY podpis;");
        while($wiersz=mysqli_fetch_array($zapytanie2)){
            $src=$wiersz['nazwaPliku'];
            $alt=$wiersz['podpis'];
            echo "<img src='$src' alt='$alt'>";
        };
        ?>
    </section>
    <aside class="prawy">
        <h2>Skontaktuj się</h2>
        <a href="mailto:turysta@wycieczki.pl">napisz do nas</a>
        <p>telefon: 111222333</p>
    </aside>
    <footer>
        <p>Stronę wykonał: Tobiasz Bielawski</p>
    </footer>
</body>
</html>