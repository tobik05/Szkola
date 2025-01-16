
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
            <nav>
                <a href="index.php" class="button">Ćwiczenie 1</a>
                <a href="cwiczenie2.php" class="button">Ćwiczenie 2</a>
                <a href="cwiczenie3.php" class="button">Ćwiczenie 3</a>
                <a href="cwiczenie4.php" class="button">Ćwiczenie 4</a>
                <a href="cwiczenie5.php" class="button">Ćwiczenie 5</a>
            </nav>
            <?php
                $czlowiek[0] = "Tobiasz";
                $czlowiek[1] = "Bielawski";
                $czlowiek[2] = "26-09-2005";
                $ludzie[0] = $czlowiek;
                $czlowiek[0] = "Kuba";
                $czlowiek[1] = "Nowak";
                $czlowiek[2] = "01-12-2010";
                $ludzie[1] = $czlowiek;
                $czlowiek[0] = "Piotr";
                $czlowiek[1] = "Lewy";
                $czlowiek[2] = "20-06-2004";
                $ludzie[2] = $czlowiek;
                echo "<table><tr><th>LP</th><th>Imie</th><th>Nazwisko</th><th>Data urodzenia</th>";
                for($i=0;$i<count($ludzie);$i++){
                    echo "<tr><td>" . $i+1 . "</td>" . "<td>" . $ludzie[$i][0] . "</td>" . "<td>" . $ludzie[$i][1] . "</td>" . "<td>" . $ludzie[$i][2] . "</td></tr>";
                }                
            ?>
        </main>
    </body>
</html>
