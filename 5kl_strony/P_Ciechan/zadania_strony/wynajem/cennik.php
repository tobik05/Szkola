<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Wynajem pokoi</title>
    <link rel="stylesheet" href="styl2.css">
</head>
<body>
    <header><h1>Pensjonat pod dobrym humorem</h1></header>
    <section class="blok_lewy">
        <a href="index.html">GŁÓWNA</a>
        <img src="1.jpg" alt="pokoje">
    </section>
    <section class="blok_srodkowy">
        <table>
        <?php 
        $con=mysqli_connect("localhost","root","","wynajem");
        $zapytanie=mysqli_query($con,"select * from pokoje");
        while($row=mysqli_fetch_array($zapytanie)){
            echo"<tr>";
            echo"<td>".$row[0]."</td>"."<td>".$row[1]."</td>"."<td>".$row[2]."</td>";
            echo "</tr>";
        }
        ?>
        </table>
    </section>
    <section class="blok_prawy">
        <a href="kalkulator.html">KALKULATOR</a>
        <img src="3.jpg" alt="pokoje">
    </section>
    <footer>
        <p>Stronę opracował: Tobiasz Bielawski</p>
    </footer>
</body>
</html>