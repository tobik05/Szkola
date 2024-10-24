<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funkcje PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <section>
        <h1>1. Obliczanie długość łańcucha</h1>
        <form method="post">
            <input type="text" name="imie" placeholder="Podaj swoje imię">
            <input type="submit" name="strlen" value="Wykonaj">
        </form>
        <?php
        if(isset($_POST['strlen'] )){
            echo "<h3>".strlen($_POST['imie'])."</h3>";
        }
        ?>
        </section>
        <section>
        <h1>2. Wyszukiwanie podciągu</h1>
        <form method="post">
            <input type="text" name="ciag" placeholder="Podaj ciąg znakow">
            <input type="text" name="podciag_tekst" placeholder="Podaj podciąg znakow">
            <input type="submit" name="podciag" value="Wykonaj">
        </form>
        <?php
        if(isset($_POST['podciag'])){
            if(strpos($_POST['ciag'],$_POST['podciag_tekst'])!== false){
                echo "<h3>Podciąg ".$_POST['podciag_tekst']." został znaleziony</h3>";
            }else{
                echo "<h3>Podciąg ".$_POST['podciag_tekst']." nie został znaleziony</h3>";
            }
        }
        ?>
        </section>
        <section>
        <h1>3. Fragmentowanie łańcucha</h1>
        <form method="post">
            <input type="text" name="ciag_fragment" placeholder="Podaj ciąg znaków">
            <input type="number" name="pozycja_poczatkowa" placeholder="Pozycja początkowa">
            <input type="number" name="dlugosc" placeholder="Długość fragmentu">
            <input type="submit" name="fragment" value="Wykonaj">
        </form>
        <?php
        if (isset($_POST['fragment'])) {
            echo "<h3>Fragment: " . substr($_POST['ciag_fragment'], ($_POST['pozycja_poczatkowa']-1), $_POST['dlugosc']) . "</h3>";
        }
        ?>
        </section>
        <section>
        <h1>4. Zastępowanie podciągu</h1>
        <form method="post">
            <input type="text" name="text" placeholder="Podaj tekst">
            <input type="text" name="stare" placeholder="Podaj stare slowo">
            <input type="text" name="nowe" placeholder="Podaj nowe slowo">
            <input type="submit" name="replace" value="Wykonaj">
        </form>
        <?php
        if (isset($_POST['replace'])) {
            echo "<h3>" . str_replace($_POST['stare'], $_POST['nowe'], $_POST['text']) . "</h3>";
        }
        ?>
        </section>
        <section>
        <h1>5. Usuwanie białych znaków</h1>
        <form method="post">
            <input type="text" name="text" placeholder="Podaj tekst">
            <input type="text" name="text_usuniecie" placeholder="Podaj znaki, ktore maja byc skasowane">
            <input type="submit" name="trim" value="Wykonaj">
        </form>
        <?php
        if (isset($_POST['trim'])) {
            echo "<h3>Oczyszczony tekst: '" . trim($_POST['text'], $_POST['text_usuniecie']) . "'</h3>";
        }
        ?>
        </section>
        <section>
        <h1>6. Zmiana wielkości liter</h1>
        <form method="post">
            <input type="text" name="text" placeholder="Podaj tekst">
            <input type="submit" name="wielkosc" value="Wykonaj">
        </form>
        <?php
        if (isset($_POST['wielkosc'])) {
            echo "<h3>Wielkie litery: " . strtoupper($_POST['text']) . "</h3>";
            echo "<h3>Małe litery: " . strtolower($_POST['text']) . "</h3>";
        }
        ?>
        </section>
        <section>
        <h1>7. Kapitalizacja pierwszej litery</h1>
        <form method="post">
            <input type="text" name="text" placeholder="Podaj tekst">
            <input type="submit" name="ucwords" value="Wykonaj">
        </form>
        <?php
        if (isset($_POST['ucwords'])) {
            echo "<h3>" . ucfirst($_POST['text']) . "</h3>";
        }
        ?>
        </section>
        <section>
        <h1>8. Kapitalizacja każdego słowa</h1>
        <form method="post">
            <input type="text" name="text" placeholder="Podaj zdanie">
            <input type="submit" name="ucwords2" value="Wykonaj">
        </form>
        <?php
        if (isset($_POST['ucwords2'])) {
            echo "<h3>" . ucwords($_POST['text']) . "</h3>";
        }
        ?>
        </section>
        <section>
        <h1>9. Dziel i zwyciężaj</h1>
        <form method="post">
            <input type="text" name="text" placeholder="Podaj zdanie">
            <input type="submit" name="explode" value="Wykonaj">
        </form>
        <?php
        if (isset($_POST['explode'])) {
            $slowa = explode(" ", $_POST['text']);
            foreach ($slowa as $slowo) {
                echo "<h3>$slowo</h3>";
            }
        }
        ?>
        </section>
        <section>
        <h1>10. Łączenie słów</h1>
        <form method="post">
            <input type="text" name="implode_words" placeholder="Podaj słowa (oddzielone przecinkami)">
            <input type="submit" name="implode" value="Wykonaj">
        </form>
        <?php
        if (isset($_POST['implode'])) {
            $wordsArray = explode(",", $_POST['implode_words']);
            echo "<h3>" . implode(", ", $wordsArray) . "</h3>";
        }
        ?>
        </section>
        <section>
        <h1>11. Odwracanie łańcucha</h1>
        <form method="post">
            <input type="text" name="text" placeholder="Podaj tekst do odwrócenia">
            <input type="submit" name="reverse" value="Wykonaj">
        </form>
        <?php
        if (isset($_POST['reverse'])) {
            echo "<h1>" . strrev($_POST['text']) . "</h1>";
        }
        ?>
        </section>
        <section>
        <h1>12. Powtarzanie łańcucha</h1>
        <form method="post">
            <input type="text" name="text" placeholder="Podaj frazę">
            <input type="number" name="ile" placeholder="Ile razy powtórzyć">
            <input type="submit" name="repeat" value="Wykonaj">
        </form>
        <?php
        if (isset($_POST['repeat'])) {
            echo "<h1>" . str_repeat($_POST['text'], $_POST['ile']) . "</h1>";
        }
        ?>
        </section>
        <section>
        <h1>14. Zliczanie wystąpień</h1>
        <form method="post">
            <input type="text" name="text" placeholder="Podaj ciąg znaków">
            <input type="text" name="ile_liter" placeholder="Podaj literę do zliczenia">
            <input type="submit" name="count" value="Wykonaj">
        </form>
        <?php
        if (isset($_POST['count'])) {
            $text = $_POST['text'];
            $liter = $_POST['ile_liter'];
            $ile = 0;

            for ($i = 0; $i < strlen($text); $i++) {
                if (substr($text, $i, 1) === $litery) {
                    $ile++;
                }
            }

            echo "<h1>Litera '" . $liter . "' występuje " . $ile . " razy.</h1>";
        }
        ?>
    </section>
    <section>
        <h1>15. Tworzenie zdania</h1>
        <form method="post">
            <input type="text" name="text" placeholder="Podaj słowa do złożenia w zdanie (oddzielone przecinkami)">
            <input type="submit" name="sentence" value="Wykonaj">
        </form>
        <?php
        if (isset($_POST['sentence'])) {
            $slowa = explode(",", $_POST['text']);
            echo "<h1>" . trim(implode(" ", $slowa)) . ".</h1>";
        }
        ?>
        </section>
    </main>
</body>
</html>