<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Wycieczki po Europie</title>
    <link rel="stylesheet" href="styl4.css">
</head>
<body>
    <header><h1>BIURO TURYSTYCZNE</h1></header>
    <section class="blok_dane">
        <h3>Wycieczki, na które są wolne miejsca</h3>
        <ul>
        <?php 
        $con=mysqli_connect("localhost",'root','','biuro');
        $zapytanie=mysqli_query($con,"SELECT id, dataWyjazdu, cel, cena from wycieczki WHERE dostepna=1;");
        while($row=mysqli_fetch_array($zapytanie)){
            echo "<li>".$row['id'].". dnia ".$row['dataWyjazdu']." jedziemy do ".$row['cel'].", cena: ".$row['cena']."</li>";
        }
        ?>
        </ul>
    </section>
    <section class="blok_lewy">
        <h2>Bestselery</h2>
        <table>
            <tr><td>Wenecja</td><td>kwiecień</td></tr>
            <tr><td>Londyn</td><td>lipiec</td></tr>
            <tr><td>Rzym</td><td>wrzesień</td></tr>
        </table>
    </section>
    <section class="blok_srodkowy">
        <h2>Nasze zdjęcia</h2>
        <?php 
        $zapytanie=mysqli_query($con,"SELECT nazwaPliku, podpis FROM zdjecia ORDER by podpis DESC;");
        while($row=mysqli_fetch_array($zapytanie)){
            echo "<img src='$row[0]' alt='$row[1]'>";

        }
        ?>
    </section>
    <section class="blok_prawy">
        <h2>Skontaktuj się</h2>
        <a href="mailto:turysta@wycieczki.pl">napsiz do nas</a>
        <p>telefon: 111222333</p>
    </section>
    <footer>
        <p>Stronę wykonał: Tobiasz Bielawski</p>
    </footer>
</body>
</html>