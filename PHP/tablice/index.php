
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
        <title>Tobiasz Bielawski - Zadanie</title>
    </head>
    <body>
        <main>
            <?php
                $tab = array('Poniedziałek', 'Wtorek', 'Środa', 'Czwartek', 'Piątek', 'Sobota', 'Niedziela');
                $tab[2] = "Środa";
                $tab[] = "cos";
                echo $tab[1];
                echo "<hr>";
                print_r($tab);
                echo "<hr>";
                echo $tab[3];
                $tab2[] = "Styczeń";
                $tab2[] = "Luty";
                echo "<hr>";
                print_r($tab2);
                echo "<hr>";
                echo "Liczba elementów tab jest równa: ".count($tab);
                //tablica asocjacyjna
                $as = array("jablko" => "czerwony", "dynia" => "pom", "śliwka" => "fioletowa");
                echo "<hr>";
                print_r($as);
                echo "<hr>";
                $as['dynia'] = "pomarańczowy";
                echo $as['dynia'];
                //tablica wielowymiarowa
                $panstwo['Polska'] = array ('stolica' => 'Warszawa', 'barwy' => 'biało czerwone');
                $panstwo['Monaco'] = array ('stolica' => 'Monaco', 'barwy' => 'czerwono białe');
                print_r($panstwo);

                session_start();
                define('servername', 'localhost');
                define('username', 'root');
                define('password', '');
                define('database', 'test');
                $conn = mysqli_connect(servername, username, password, ) or die(mysqli_error($conn));
                $db_select = mysqli_select_db($conn, database) or die(mysqli_error($conn));
                $sql = "SELECT * FROM mieszkancy WHERE ulica='Zachodnia'";
                $res = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                $rows = mysqli_num_rows($res);
                $imie = $rows['imie'];
                $nazwisko = $rows['nazwisko'];
                echo $imie." ".$nazwisko;
            ?>
        </main>
    </body>
</html>
