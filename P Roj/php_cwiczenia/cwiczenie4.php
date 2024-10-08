
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
            <form action="" method="post">
                <section>Liczba 1: <input type="number" class="input" required name="liczba1"></section>
                <section>Liczba 2: <input type="number" class="input" required name="liczba2"></section>
                <section class="linia">
                    <section><label for="1">Dodawanie <input type="radio" value="+" name="dzialanie" id="1"></label></section>
                    <section><label for="2">Odejmowanie <input type="radio" value="-" name="dzialanie" id="2"></label></section>
                </section>
                <section class="linia">
                    <section><label for="3">Mnożenie<input type="radio" value="*" name="dzialanie" id="3"></label></section>
                    <section><label for="4">Dzielenie <input type="radio" value="/" name="dzialanie" id="4"></label></section>
                </section>
                <input type="submit" value="Wykonaj" class="button">
            </form>
            <?php
                if(isset($_POST['liczba1']) & isset($_POST['liczba2']) & isset($_POST['dzialanie'])){
                    if($_POST['dzialanie']=="+"){
                        $wynik = $_POST['liczba1'] + $_POST['liczba2'];
                    }
                    if($_POST['dzialanie']=="-"){
                        $wynik = $_POST['liczba1'] - $_POST['liczba2'];
                    }
                    if($_POST['dzialanie']=="*"){
                        $wynik = $_POST['liczba1'] * $_POST['liczba2'];
                    }
                    if($_POST['dzialanie']=="/"){
                        $wynik = $_POST['liczba1'] / $_POST['liczba2'];
                    }
                    echo "<h1 class='wynik'>Wynik działania "  . $_POST['liczba1'] . $_POST['dzialanie'] . $_POST['liczba2'] . "=$wynik </h1>";
                }
            ?>
        </main>
    </body>
</html>
