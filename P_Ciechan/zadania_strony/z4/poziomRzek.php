<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Poziomy rzek</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header class="header_1"><img src="obraz1.png" alt="Mapa Polski"></header>
    <header class="header_2"><h1>Rzeki w województwie dolnośląskim</h1></header>
    <section class="menu">
        <form action="poziomRzek.php" method="post">
        <label class="tekst_radio"><input type="radio" name="radio_wybor" value="Wszystkie" class="input_radio">Wszystkie</label>
        <label class="tekst_radio"><input type="radio" name="radio_wybor" value="Ponad stan ostrzegawczy" class="input_radio">Ponad stan ostrzegawczy</label>
        <label class="tekst_radio"><input type="radio" name="radio_wybor" value="Ponad stan alarmowy" class="input_radio">Ponad stan alarmowy</label>
            <input type="submit" name="submit" value="Pokaż">
        </form>
    </section>
    <section class="lewy">
        <h3>Stany na dzień 2022-05-05</h3>
        <table>
            <tr><th>Wodomierz</th><th>Rzeka</th><th>Ostrzegawczy</th><th>Alarmowy</th><th>Aktualny</th></tr>
            <?php
            $con=mysqli_connect("localhost", "root", "", "rzeki");
            if(isset($_POST['submit'])){
                if($_POST['radio_wybor']=="Ponad stan ostrzegawczy"){
                    $zapytanie=mysqli_query($con, "SELECT wodowskazy.nazwa, wodowskazy.rzeka,wodowskazy.stanOstrzegawczy, wodowskazy.stanAlarmowy, pomiary.stanWody, pomiary.dataPomiaru from wodowskazy INNER JOIN pomiary ON wodowskazy.id=pomiary.wodowskazy_id WHERE pomiary.dataPomiaru='2022-05-05' AND pomiary.stanWody>wodowskazy.stanOstrzegawczy");
                }elseif($_POST['radio_wybor']=="Ponad stan alarmowy"){
                    $zapytanie=mysqli_query($con, "SELECT wodowskazy.nazwa, wodowskazy.rzeka,wodowskazy.stanOstrzegawczy, wodowskazy.stanAlarmowy, pomiary.stanWody, pomiary.dataPomiaru from wodowskazy INNER JOIN pomiary ON wodowskazy.id=pomiary.wodowskazy_id WHERE pomiary.dataPomiaru='2022-05-05' AND pomiary.stanWody>wodowskazy.stanAlarmowy");
                }else{
                    $zapytanie=mysqli_query($con, "SELECT wodowskazy.nazwa, wodowskazy.rzeka,wodowskazy.stanOstrzegawczy, wodowskazy.stanAlarmowy, pomiary.stanWody, pomiary.dataPomiaru from wodowskazy INNER JOIN pomiary ON wodowskazy.id=pomiary.wodowskazy_id WHERE pomiary.dataPomiaru='2022-05-05'");
                }
                while($row=mysqli_fetch_array($zapytanie)){
                    echo "<tr>";
                    echo "<td>".$row['nazwa']."</td><td>".$row['rzeka']."</td><td>".$row['stanOstrzegawczy']."</td><td>".$row['stanAlarmowy']."</td><td>".$row['stanWody'];
                    echo "</tr>";
                }
            }
            mysqli_close($con);
            ?>
        </table>
    </section>
    <section class="prawy">
        <h3>Informacje</h3>
        <ul>
            <li>Brak ostrzeżeń o burzach z gradem</li>
            <li>Smog w mieście Wrocław</li>
            <li>Silny wiatr w Karkonoszach</li>
        </ul>
        <h3>Średnie stany wód</h3>
        <?php
        $con=mysqli_connect("localhost", "root", "", "rzeki");
        $zapytanie=mysqli_query($con,"SELECT dataPomiaru, AVG(stanWody) as 'srednia' from pomiary GROUP by dataPomiaru");
        while($row=mysqli_fetch_array($zapytanie)){
            echo "<p>".$row['dataPomiaru']." ".$row['srednia']."</p>";
        }
        mysqli_close($con);
        ?>
        <a href="https://komunikaty.pl/">Dowiedz się więcej</a>
        <img src="obraz2.jpg" alt="rzeka">
    </section>
    <footer>
        <p>Stronę wykonał: Tobiasz Bielawski</p>
    </footer>
</body>
</html>