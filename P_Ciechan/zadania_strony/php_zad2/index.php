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
                    mysqli_close($con);
                ?>
                </form>
            </section>
            <section class="bottom_side"></section>
        </section>
        <section class="right_side">
            <?php
                if(isset($_POST['submit'])){
                    $marka = $_POST['wybor_marka'];
                    $model = $_POST['wybor_model'];
                    $rok =  $_POST['wybor_rok'];
                    $where[]="";
                    if ($marka != "Marka") {
                        $where[] = " AND marka='$marka'";
                    }
                    if ($model != "Model") {
                        $where[] = " AND model='$model'";
                    }
                    if ($rok != "Rok") {
                        $where[] = " AND rok='$rok'";
                    }
                    $con = mysqli_connect("localhost", "root", "", "technikum");
                    $zapytanie = mysqli_query($con, "SELECT * from uczen where $where");
                    echo "<article>";
                    while($wiersz = mysqli_fetch_array($zapytanie)){
                        echo "<p>" . $wiersz['marka'] . " " . $wiersz['model'] . " " . $wiersz['rok'] .  "</p>";
                    }
                    echo "</article>";
                    mysqli_close($con);
                }
            ?>
        </section>
    </main>
</body>
</html>