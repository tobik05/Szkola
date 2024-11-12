<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Odloty samolotów</title>
    <link rel="stylesheet" href="styl6.css">
</head>
<body>
    <header class="header_1"><h2>Odloty z lotniska</h2></header>
    <header class="header_2"><img src="zad6.png" alt="logotyp"></header>
    <main>
        <h4>tabela odlotów</h4>
        <table>
            <tr><th>lp.</th><th>numer rejsu</th><th>czas</th><th>kierunek</th><th>status</th></tr>
            <?php 
                $con=mysqli_connect("localhost","root","","egzamin_loty");
                $zapytanie=mysqli_query($con, "select id, nr_rejsu, czas, kierunek, status_lotu from odloty order by czas DESC;");
                while($row=mysqli_fetch_array($zapytanie)){
                    echo "<tr>";
                    echo "<td>".$row['id']."</td><td>".$row['nr_rejsu']."</td><td>".$row['czas']."</td><td>".$row['kierunek']."</td><td>".$row['status_lotu']."</td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </main>
    <footer class="footer_1"><a href="kw1.png">Pobierz obraz</a></footer>
    <footer class="footer_2">
        <?php
        if(!isset($_COOKIE["odwiedziny"])){
            $licznik=1;
            setcookie("odwiedziny",$licznik,time()+3600,"/","localhost");
            echo "<p>Dzień dobry! Sprawdź regulamin naszej strony</p>";
        }else{
            $licznik=$_COOKIE["odwiedziny"];
            $licznik++;
            echo "<p>Miło nam, że nas znowu odwiedziłeś</p>";
            setcookie("odwiedziny",$licznik,time()+3600,"/","localhost");
        }
        ?>
    </footer class="footer_3">
    <footer>Autor: Tobiasz Bielawski</footer>
</body>
</html>