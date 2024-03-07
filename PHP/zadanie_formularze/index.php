
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
            <div class="zadanie_1"></div>
            <div class="zadanie_2"></div>
            <div class="zadanie_3"></div>
            <div class="zadanie_4">
                <h3>Zadanie 4</h3>
                <form action="zadanie1_kod.php" method="post">
                    <div class="kolumna">
                        <input type="text" name="imie_1">
                        <input type="text" name="nazwisko_1">
                        <input type="email" name="email_1">
                        <input type="number" name="wiek_1" min="0">
                    </div>
                    <div class="kolumna">
                        <input type="text" name="imie_2">
                        <input type="text" name="nazwisko_2">
                        <input type="email" name="email_2">
                        <input type="number" name="wiek_2" min="0">
                    </div>
                    <input type="submit" value="Wykonaj">
                </form>
            </div>
        </main>
    </body>
</html>