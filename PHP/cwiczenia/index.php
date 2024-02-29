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
            <form action="zamowienie.php" method="post">
                <ul ><h3>Dane Klienta</h3>
                    <li><input type="text" name="imie" class="input-text" required placeholder="Imię" class="input" class="input"></li>
                    <li><input type="text" name="nazwisko" class="input-text" required placeholder="Nazwisko" class="input"></li>
                    <li><input type="text" name="nr" class="input-text" required placeholder="Nr Rejestracyjny" class="input"></li>
                </ul>
                <ul class="hamburgery"><h3>Odbiór zamówienia</h3>
                    <li><input type="radio" name="odbior" required value="Na wynos" id="opcja1-odbior" class="input"><label for="opcja1-odbior" class="input-radio">Na wynos</label></li>
                    <li><input type="radio" name="odbior" required value="Na miejscu" id="opcja2-odbior" class="input"><label for="opcja2-odbior" class="input-radio">Na miejscu</label></li>
                </ul>
                <ul class="hamburgery"><h3>Hamburgery</h3>
                    <li><input type="checkbox" name="hamburger1" value="WieśMac" id="opcja1-hamburger" class="input"><label for="opcja1-hamburger" class="input-checkbox"><img src="wiesmac.png" class="zdj"></label></li>
                    <li><input type="checkbox" name="hamburger2" value="McRoyal" id="opcja2-hamburger" class="input"><label for="opcja2-hamburger" class="input-checkbox"><img src="mcroyal.png" class="zdj"></label></li>
                </ul>
                <ul class="hamburgery"><h3>Inne</h3>
                    <li><input type="checkbox" name="inne1" value="McNuggets" id="opcja1-inne" class="input"><label for="opcja1-inne" class="input-checkbox"><img src="mcnuggets.png" class="zdj"></label></li>
                    <li><input type="checkbox" name="inne2" value="McWrap" id="opcja2-inne" class="input"><label for="opcja2-inne" class="input-checkbox"><img src="mcwrap.png" class="zdj"></label></li>
                </ul>
                <input type="submit" value="Złóż zamówienie" class="button">
            </form>
        </main>
    </body>
</html>
