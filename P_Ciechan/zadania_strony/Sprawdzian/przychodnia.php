<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Przychodnia</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>PRZYCHODNIA LEKARSKA</h1>
    </header>
    <section class="left_side">
        <h2>PACJENCI:</h2>
        <section class="pacjenci">
        <?php
        $con=mysqli_connect("localhost","root","","przychodnia");
        $zapytanie=mysqli_query($con,"SELECT Imie, Nazwisko, Pesel, Data_ur FROM pacjent");
        echo "<table><tr><th>Imię</th><th>Nazwisko</th><th>PESEL</th><th>Data urodzenia</th></tr>";
        while($row=mysqli_fetch_array($zapytanie)){
            echo "<tr><td>".$row['Imie']."</td><td>".$row['Nazwisko']."</td><td>".$row['Pesel']."</td><td>".$row['Data_ur']."</td></tr>";
        }
        echo "</table>";
        mysqli_close($con);
        ?>
        </section>
    </section>
    <section class="center_side">
        <h2>DODAJ PACJENTA DO BAZY:</h2>
        <form method="post">
            <p>Imię <input type="text" name="imie" required minlength="1"></p>
            <p>Nazwisko <input type="text" name="nazwisko" required minlength="1"></p>
            <p>PESEL <input type="number" name="pesel" required minlength="11"></p>
            <p>Data urodzenia <input type="text" name="data_urodzenia" required minlength="6"></p>
            <input type="submit" name="dodaj_do_bazy" value="DODAJ DO BAZY">
        </form>
        <?php 
        if(isset($_POST['dodaj_do_bazy'])){
            $imie=$_POST['imie'];
            $nazwisko=$_POST['nazwisko'];
            $pesel=$_POST['pesel'];
            $data_urodzenia=$_POST['data_urodzenia'];
            $con=mysqli_connect("localhost","root","","przychodnia");
            $zapytanie=mysqli_query($con,"INSERT INTO pacjent (Imie, Nazwisko, Pesel, Data_ur) VALUES('$imie', '$nazwisko', '$pesel', '$data_urodzenia')");    
            mysqli_close($con);
        }
        ?>
    </section>
    <section class="right_side">
    <h2>SZUAKJ LEKARZA:</h2>
        <form method="post">
            <p><input type="text" required name="specjalnosc"></p>
            <input type="submit" name="pokaz_specjalnosc" value="POKAŻ">
        </form>
        <?php
        if(isset($_POST['pokaz_specjalnosc'])){
            $specjalnosc=$_POST['specjalnosc'];
            $con=mysqli_connect("localhost","root","","przychodnia");
            $zapytanie=mysqli_query($con, "select imie, nazwisko from lekarz where specjalnosc='$specjalnosc'");
            echo"<ul>";
            while($row=mysqli_fetch_array($zapytanie)){
                echo"<li>".$row['imie']." ".$row['nazwisko']."</li>";
            }
            echo "</ul>";
            mysqli_close($con);
        }
        ?>
    </section>
    <section class="left_side_bottom">
        <p>AKTUALNA LICZBA PACJENTÓW W BAZIE:</p>
        <?php 
        $con=mysqli_connect("localhost","root","","przychodnia");
        $zapytanie=mysqli_query($con,"select count(*) as ile from pacjent");  
        $row=mysqli_fetch_array($zapytanie);
        echo $row['ile'];
        mysqli_close($con);
        
        ?>
    </section>
    <section class="right_side_bottom">
        <p>LISTA LEKARZY ORAZ LICZBA WIZYT KAŻDEGO Z NICH:</p>
        <section class="wizyty">
        <?php
        $con=mysqli_connect("localhost","root","","przychodnia");
        $zapytanie=mysqli_query($con, "SELECT Imie, Nazwisko, COUNT(wizyta.id_lekarza) as ile FROM lekarz INNER JOIN wizyta on wizyta.id_lekarza=lekarz.id_lekarza GROUP by lekarz.id_lekarza;");
        while($row=mysqli_fetch_array($zapytanie)){
            echo"<p>".$row['Imie']." ".$row['Nazwisko']." ".$row['ile']."</p>";
        }
        mysqli_close($con);
        ?>
        </section>
    </section>
    <footer>
        <h3>Imię nazwisko: Tobiasz Bielawski</h3>
    </footer>
</body>
</html>