
<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="Tobiasz, Bielawski, Strony, PHP">
        <meta name="author" content="Tobiasz Bielawski">
        <link rel="stylesheet" href="style.css">
        <link rel="icon" type="image/x-icon" href="logo.png">
        <title>Tobiasz Bielawski</title>
    </head>
    <body>
        <h1>SAMOCHODY</h1>
        <?php
        session_start();
            if(isset($_SESSION['dodanie'])){
                echo $_SESSION['dodanie'];
                unset($_SESSION['dodanie']);
            }
        ?>
        <main>
            <?php 
                $con = mysqli_connect("localhost", "root", "", "szkola");
                if(mysqli_connect_errno()){
                    printf("Połączenie nie udane: %s\n", mysqli_connect_error());
                    exit();
                }
                $zapytanie = "select * from samochody";
                $wynik = mysqli_query($con, $zapytanie);
                ?>

                <form name="dodaj" method="post" action="dodaj.php">
                    <input type="text" name="marka" placeholder="Marka" pattern="([A-zĄ-ż\s]){2,}" required><br>
                    <input type="text" name="model" placeholder="Model" pattern="([A-z0-9Ą-ż\s]){2,}" required><br>
                    <input type="number" name="rok" placeholder="Rok" min="1885" max="<?php echo date("Y");?>" required><br>
                    <input type="number" name="przebieg" placeholder="Przebieg" min="0" required><br>
                    <input type="text" name="kolor" placeholder="Kolor" pattern="([A-zĄ-ż\s]){2,}" required><br>
                    <input type="submit" name="dodaj" value="Dodaj samochód">
                </form>
                <section>
                        <table>
                        <tr class="pierwsza">
                            <th>L.P.</th>
                            <th>Marka</th>
                            <th>Model</th>
                            <th>Rok</th>
                            <th>Przebieg</th>
                            <th>Kolor</th>
                            <!--<td><th id="klasa">Działanie</th>-->
                        </tr>
                <?php while ($wiersz=mysqli_fetch_array($wynik)) { ?>
                        <tr>
                            <td><?php echo $wiersz['id'];?></td>
                            <td><?php echo $wiersz['marka'];?></td>
                            <td><?php echo $wiersz['model'];?></td>
                            <td><?php echo $wiersz['rok'];?></td>
                            <td><?php echo $wiersz['przebieg'];?></td>
                            <td><?php echo $wiersz['kolor'];?></td>
                            <td><?php $id=$wiersz['id'];
                            echo "<button class='error'><a href='usun.php?id=$id>Usuń</a></button>" ?></td>
                        </tr>
                    <?php
                }
                echo "</table></section>";
                mysqli_close($con)
            ?>
        </main>
    </body>
</html>
