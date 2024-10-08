
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
        <meta http-equiv="refresh" content="1">
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
                echo "<section class='zadanie'>" . date("H:i:s m-d-Y") .  "</section>";
            ?>
        </main>
    </body>
</html>
