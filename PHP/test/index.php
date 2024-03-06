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
        <main>
            <h1 class="tytul">Połączenie z bazą danych</h1>
            <?php
                session_start();
                $conn = mysqli_connect("localhost", "root", "", ) or die(mysqli_error($conn));
                $db_select = mysqli_select_db($conn, "test") or die(mysqli_error($conn));
                $sql = "SELECT * FROM mieszkancy";
                $result = $conn->query($sql);
                $row = mysqli_num_rows($result);
                if ($result == true ) {
                    echo "<table>";
                    echo "<tr class='pierwszy-wiersz'>";
                    echo "<td class='pierwsza-kolumna'>Imie</td>";
                    echo "<td>Nazwisko</td>";
                    echo "<td>Miasto</td>";
                    echo "<td>Ulica</td>";
                    while($row=mysqli_fetch_assoc($result))
                    {
                        $id = $row["id"];
                        $imie = $row["imie"];
                        $nazwisko = $row["nazwisko"];
                        $miasto = $row["miasto"];
                        $ulica = $row["ulica"];
                        echo "<tr>";
                        echo "<td class='pierwsza-kolumna'>$imie</td>";
                        echo "<td>$nazwisko</td>";
                        echo "<td>$miasto</td>";
                        echo "<td>$ulica</td>";
                        echo "</tr>";
                    }
                    echo "</tr>";
                } else {
                    echo "Brak informacji.";
                }
                $conn->close();
            ?>
        </main>
    </body> 
</html>
