<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Rozgrywki futbolowe</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
        <h2>Światowe rozgrywki piłkarskie</h2>
        <img src="obraz1.jpg" alt="boisko">
    </header>
    <section>
        <?php 
            $con=mysqli_connect("localhost", "root", "", "egzamin");
            $zapytanie=mysqli_query($con, "select zespol1,zespol2, data_rozgrywki,wynik from rozgrywka where zespol1='EVG'");
            while($wiersz=mysqli_fetch_array($zapytanie)){
                echo "<section class='info'>";
                echo "<h3>" . $wiersz["zespol1"] . "-" . $wiersz["zespol2"] . "</h3>";
                echo "<h4>" . $wiersz["wynik"] . "</h4>";
                echo "</section>";
            }
        ?>
    </section>
    <main>
        <h2>Reprezentacja Polski</h2>
    </main>
    <section class="left">
        <p>Podaj pozycję zawodników (1-bramkarze, 2-obrońcy, 3-pomocnicy, 4-napastnicy):</p>
        <form action="" method="post">
            <input type="number" name="dane">
            <input type="submit" value="Sprawdź">
        </form>
        <ul>
            <?php
            if(isset($_POST["dane"]))
            {
                $dane=$_POST["dane"];
                $con=mysqli_connect("localhost", "root", "", "egzamin");
                $zapytanie=mysqli_query($con, "SELECT imie,nazwisko FROM zawodnik WHERE pozycja_id=$dane");
                while($wiersz=mysqli_fetch_array($zapytanie)){
                    echo "<li>";
                    echo "<p>" . $wiersz["imie"] . " " . $wiersz["nazwisko"] . "</p>";
                    echo "</li>";
                }
            }
            ?>
        </ul>
    </section>
    <section class="right">
        <img src="zad1.png" alt="piłkarz">
        <p>Autor: TobiaszBielawski</p>
    </section>
</body>
</html>