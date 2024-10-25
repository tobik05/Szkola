<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Przychodnia</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        
    </header>
    <section class="left_side">
        <h1>PACJENCI:</h1>
        <?php

        ?>
    </section>
    <section class="center_side">
        <form method="post">
            Imię <input type="text" name="imie" required minlength="1">
            Nazwisko <input type="text" name="nazwisko" required minlength="1">
            PESEL <input type="number" name="pesel" required minlength="11" maxlength="11">
            Data urodzenia <input type="number" name="data_urodzenia" required minlength="6" maxlength="6">
        </form>
    </section>
    <section class="right_side">
        
    </section>
    <section class="left_side_bottom">

    </section>
    <section class="right_side_bottom">

    </section>
    <footer>
        <h3>Imię nazwisko: Tobiasz Bielawski</h3>
    </footer>
</body>
</html>