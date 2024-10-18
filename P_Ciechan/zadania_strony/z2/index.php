<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Dane o zwierzętach</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<body>
    <header>
        <h1>ATLAS ZWIERZĄT</h1>
    </header>
    <form action="" method="POST">
        <h2>Gromady</h2>
        <ol>
            <li>Ryby</li>
            <li>Płazy</li>
            <li>Gady</li>
            <li>Ptaki</li>
            <li>Ssaki</li>
        </ol>
        Wybierz gromadę:
        <input type="number" name="nr_gromady">
        <input type="submit" name="submit" value="Wyświetl">
    </form>
    <section class="left_side">
        <img src="zwierzeta.jpg" alt="dzikie zwierzęta">
    </section>
    <section class="main">
        <?php
        $con=mysqli_connect("localhost","root","","baza");
        if(isset($_POST['submit'])){
            $numer_gromady=$_POST['nr_gromady'];
            $gromady[1]="RYBY";
            $gromady[2]="PŁAZY";
            $gromady[3]="GADY";
            $gromady[4]="PTAKI";
            $gromady[5]="SSAKI";
            echo "<h2>".$gromady[$numer_gromady]."</h2>";
            $zapytanie=mysqli_query($con, "SELECT gatunek, wystepowanie FROM `zwierzeta` where gromady_id=$numer_gromady;");
            while($row=mysqli_fetch_array($zapytanie)){
                echo"<p>".$row['gatunek']." ".$row['wystepowanie']."</p>";
            }
        }
        mysqli_close($con);
        ?>
    </section>
    <section class="right_side">
        <h2>Wszystkie zwierzęta w bazie</h2>
        <?php 
        $con=mysqli_connect("localhost","root","","baza");
        $zapytanie=mysqli_query($con, "SELECT Z.id, Z.gatunek, G.nazwa FROM Zwierzeta Z JOIN Gromady G ON Z.Gromady_id = G.id;");
        while($row=mysqli_fetch_array($zapytanie)){
            echo$row['id']." ".$row['gatunek']." ".$row['nazwa']."<br>";
        }
        mysqli_close($con);
        ?>
    </section>
    <footer>
        <a href="//atlas-zwierzat.pl" target="_blank">Poznaj inne strony o zwierzętach</a>
        autor Atlasu zwierząt: Tobiasz Bielawski
    </footer>
</body>
</html>