<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Hodowla świnek morskich</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
        <h1>Hodowla świnek morskich - zamów świnkowe maluszki</h1>
    </header>
    <section class="blok_menu">
        <a href="peruwianka.php">Rasa Peruwianka</a>
        <a href="american.php">Rasa American</a>
        <a href="crested.php">Rasa Crested</a>
    </section>
    <section class="blok_prawy">
        <h3>Poznaj wszystkie rasy świnek morskich</h3>
        <ol>
        <?php 
        //skrypt 1
        $con=mysqli_connect("localhost","root","","hodowla");
        $zapytanie=mysqli_query($con,"SELECT rasa from rasy;");
        while($row=mysqli_fetch_array($zapytanie)){
            echo "<li>".$row['rasa']."</li>";
        }
        ?>
        </>
    </section>
    <section class="blok_glowny">
        <img src="peruwianka.jpg" alt="Świnka morska rasy peruwianka">
        <?php 
        //skrypt 2
        $con=mysqli_connect("localhost","root","","hodowla");
        $zapytanie=mysqli_query($con,"SELECT DISTINCT data_ur, miot, rasa FROM swinki JOIN rasy on rasy_id=rasy.id where rasy.id=1;");
        $row=mysqli_fetch_array($zapytanie);
        echo "<h2>Rasa: ".$row['rasa']."</h2>";
        echo "<p>Data urodzenia: ".$row['data_ur']."</p>";
        echo "<p>Oznaczenie miotu: ".$row['miot']."</p>";
        ?>
        <hr>
        <h2>Świnki w tym miocie</h2>
        <?php 
        //skrypt 3
        $zapytanie_2=mysqli_query($con,"SELECT imie, cena, opis from swinki where rasy_id=1;");
        while($row_2=mysqli_fetch_array($zapytanie_2)){
        echo "<h3>".$row_2['imie']." - ".$row_2['cena']."</h3>";
        echo "<p>".$row_2['opis']."</p>";
        }
        mysqli_close($con);
        ?>
    </section>
    <footer>
        <p>Stronę wykonał: Tobiasz Bielawski</p>
    </footer>
</body>
</html>