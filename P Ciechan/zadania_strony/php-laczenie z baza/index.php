
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
            <?php 
                $con = mysqli_connect("localhost", "root", "", "szkola");
                $link = "http://localhost/Szkola/P%20Ciechan/zadania_strony/php-laczenie%20z%20baza";
                if(mysqli_connect_error()){
                    echo "Błąd połączenia: " . mysqli_connect_error();
                    exit();
                }else{
                    $zapytanie = mysqli_query($con, "select * from uczniowie");
                    echo "<table><tr><th>ID</th><th>Imię</th><th>Nazwisko</th><th>Klasa</th><th>Działanie</th></tr>";
                    while($wiersz = mysqli_fetch_array($zapytanie)){
                        echo "<tr>";
                        echo "<td>" . $wiersz[0] . "</td>" . "<td>" . $wiersz[1] . "</td>" . "<td>" . $wiersz[2] . "</td>" . "<td>" . $wiersz[3] . "</td>" . "<td><a href='$link/usun?id=$wiersz[0]'>Usuń</a></td>";
                        echo "</tr>";
                    }
                }
                mysqli_close($con)
            ?>
        </main>
    </body>
</html>
