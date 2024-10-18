<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Samochody</title>
        <link rel="stylesheet" href="style.css">
        <link rel="icon" href="logo.png">
    </head>
<body>
<script src="https://kit.fontawesome.com/ef5f951ae9.js" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <main>
        <section class="left_side">
            <section class="top_side">
                <form method="post">
                <?php
                    $con = mysqli_connect("localhost", "root", "", "auta");
                    $zapytanie = mysqli_query($con, "SELECT DISTINCT marka from samochody");
                    echo "<select name='wybor_marka'>";
                    echo "<option>Marka</option>";
                    while($wiersz = mysqli_fetch_array($zapytanie)){
                        echo "<option>" . $wiersz['marka'] . "</option>";
                    }
                    echo "</select>";
                    $zapytanie2 = mysqli_query($con, "SELECT DISTINCT model from samochody");
                    echo "<select name='wybor_model'>";
                    echo "<option>Model</option>";
                    while($wiersz = mysqli_fetch_array($zapytanie2)){
                        echo "<option>" . $wiersz['model'] . "</option>";
                    }
                    echo "</select>";
                    $zapytanie3 = mysqli_query($con, "SELECT DISTINCT rok from samochody");
                    echo "<select name='wybor_rok'>";
                    echo "<option>Rok</option>";
                    while($wiersz = mysqli_fetch_array($zapytanie3)){
                        echo "<option>" . $wiersz['rok'] . "</option>";
                    }
                    echo "</select>";
                    echo "<input type='submit' name='submit' value='Pokaż samochody'>";
                ?>
                </form>
                <form action="" method="post" class="ulozone">
                    <h1>Wyświetlanie w zakresie dat</h1>
                    <input type="number" name="od" placeholder="Od" min="1801" max="<?php date("R")?>" required>
                    <input type="number" name="do" placeholder="Do" min="1801" max="<?php date("R")?>" required>
                    <input type="submit" name="pokaz_zakres" value="Pokaż w zakresie dat">
                </form>
            </section>
            <section class="bottom_side">
                
            <form method="post" enctype="multipart/form-data" class="ulozone">
                <h1>Dodawanie samochodu</h1>
                <input type="text" name="marka" placeholder="Marka" required>
                <input type="text" name="model" placeholder="Model" required>
                <input type="number" name="rok" placeholder="Rok" required>
                <input type="file" name="zdjecie" accept="image/*" required>
                <input type="submit" name="dodaj" value="Dodaj samochód">
            </form>
            <?php
                if(isset($_POST['dodaj'])){
                    $con = mysqli_connect("localhost", "root", "", "auta");
                    $marka = $_POST['marka'];
                    $model = $_POST['model'];
                    $rok = $_POST['rok'];
                    
                    if(isset($_FILES['zdjecie']) && $_FILES['zdjecie']['error'] == 0){
                        $nazwa_obrazu = $_FILES['zdjecie']['name'];
                        $sciezka_docelowa = basename($nazwa_obrazu);
                        if(move_uploaded_file($_FILES['zdjecie']['tmp_name'], $sciezka_docelowa)){
                            $zapytanie = "INSERT INTO samochody (marka, model, rok, nazwa_pliku) VALUES ('$marka', '$model', '$rok', '$nazwa_obrazu')";
                            if(mysqli_query($con, $zapytanie)){
                                echo "Samochód został dodany!";
                            } else {
                                echo "Błąd przy dodawaniu samochodu: " . mysqli_error($con);
                            }
                        }else{
                            echo "Wystąpił błąd przy przesyłaniu pliku.";
                        }
                    }else{
                        echo "Nie wybrano pliku lub wystąpił błąd przy przesyłaniu.";
                    }
                    mysqli_close($con);
                }
                
            ?>
            </section>
        </section>
        <section class="right_side">
        <?php
            if(isset($_POST['submit'])){
                $marka = $_POST['wybor_marka'];
                $model = $_POST['wybor_model'];
                $rok =  $_POST['wybor_rok'];
                $warunki = [];
                if ($marka != "Marka") {
                    $warunki[] = "marka = '$marka'";
                }
                if ($model != "Model") {
                    $warunki[] = "model = '$model'";
                }
                if ($rok != "Rok") {
                    $warunki[] = "rok = '$rok'";
                }
                $sql = "SELECT * FROM samochody";
                if (count($warunki) > 0) {
                    $sql .= " WHERE " . implode(" AND ", $warunki);
                }
                $zapytanie = mysqli_query($con, $sql);
                echo "<article>";
                while($wiersz = mysqli_fetch_array($zapytanie)){
                    echo "<p>" . $wiersz['marka'] . " " . $wiersz['model'] . " " . $wiersz['rok'] . "<img src='" . $wiersz['nazwa_pliku']. "'>" . "</p>";
                }
                echo "</article>";
            }else{
                $zapytanie = mysqli_query($con,"SELECT * FROM samochody");
                echo "<article>";
                while($wiersz = mysqli_fetch_array($zapytanie)){
                    echo "<p>" . $wiersz['marka'] . " " . $wiersz['model'] . " " . $wiersz['rok'] . "<img src='" . $wiersz['nazwa_pliku']. "'>" . "</p>";
                }
                echo "</article>";
            }
            mysqli_close($con);
        ?>
        <?php 
            if(isset($_POST['pokaz_zakres'])){
                $con = mysqli_connect("localhost", "root", "", "auta");
                $od=$_POST["od"];
                $do =  $_POST['do'];
                $sql = "SELECT * FROM samochody where rok BETWEEN '$od' and '$do' ORDER BY rok ASC";
                $zapytanie = mysqli_query($con, $sql);
                echo "<article>";
                while($wiersz = mysqli_fetch_array($zapytanie)){
                    echo "<p>" . $wiersz['marka'] . " " . $wiersz['model'] . " " . $wiersz['rok'] . "<img src='" . $wiersz['nazwa_pliku']. "'>" . "</p>";
                }
                echo "</article>";
                mysqli_close($con);
            }
        ?>
        </section>
    </main>
</body>
</html>