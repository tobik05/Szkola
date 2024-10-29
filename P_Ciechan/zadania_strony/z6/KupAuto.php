<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Komis aut</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
        <h1><i>KupAuto!</i> Internetowy Komis
        Samochodowy</h1>
    </header>
    <section class="oferta_dnia">
        <?php 
        $con=mysqli_connect("localhost","root","","kupauto");
        $zapytanie=mysqli_query($con, "SELECT model, rocznik, przebieg, paliwo, cena, zdjecie FROM samochody WHERE id=10");
        $row=mysqli_fetch_array($zapytanie);
        echo "<img src='".$row['zdjecie']."' alt='oferta dnia'><h4>Oferta Dnia: Toyota ".$row['model']."</h4><p>Rocznik: ".$row['rocznik'].", przebieg: ".$row['przebieg'].", rodzaj paliwa: ".$row['paliwo']."</p><h4>Cerna: ".$row['cena']."</h4>";
        ?>
    </section>
    <section class="wyroznione">
        <h2>Oferty Wyróżnione</h2>
        <?php 
        $con=mysqli_connect("localhost","root","","kupauto");
        $zapytanie=mysqli_query($con, "SELECT samochody.model, samochody.rocznik, samochody.cena, samochody.zdjecie, marki.nazwa FROM samochody INNER JOIN marki on marki.id=samochody.marki_id WHERE samochody.wyrozniony=1 LIMIT 4;");
        while($row=mysqli_fetch_array($zapytanie)){
            echo"<section class=auta><img src='".$row['zdjecie']."' alt='".$row['model']."'><h4>".$row['nazwa']." ".$row['model']."</h4><p>".$row['rocznik']."</p><h4>".$row['cena']."</h4></section>";
        }
        ?>
    </section>
    <section class="marki">
        <h2>Wybierz markę</h2>
        <form method="post">
            <select name="marka">
                <?php 
                $con=mysqli_connect("localhost","root","","kupauto");
                $zapytanie=mysqli_query($con, "SELECT nazwa from marki");
                while($row=mysqli_fetch_array($zapytanie)){
                    echo"<option value='".$row['nazwa']."'>".$row['nazwa']."</option>";
                }
                ?>
            </select>
            <input type="submit" name="wyszukaj" value="Wyszukaj">
        </form>
        <?php 
        if(isset($_POST['wyszukaj'])){
            $con=mysqli_connect("localhost","root","","kupauto");
            $marka=$_POST['marka'];
            $zapytanie=mysqli_query($con, "SELECT samochody.model, samochody.cena, samochody.zdjecie, marki.nazwa FROM samochody INNER JOIN marki on marki.id=samochody.marki_id WHERE marki.nazwa='$marka'");
            while($row=mysqli_fetch_array($zapytanie)){
                echo "<section class='auta'><img src='".$row['zdjecie']."' alt='".$row['model']."'><h4>".$row['nazwa']." ".$row['model']."</h4><h4>Cena: ".$row['cena']."</h4></section>";
            }
        }
        mysqli_close($con);
        ?>
    </section>
    <footer>
        <p>Stronę wykonał: Tobiasz Bielawski</p>
        <p><a href="http://firmy.pl/komis">Znajdź nas także</a></p>
    </footer>
</body>
</html>