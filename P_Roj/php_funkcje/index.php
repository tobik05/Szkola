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
        <h1>Kapitalizacja każdego słowa</h1>
        <form method="post">
            <input type="text" name="text" placeholder="Podaj tekst">
            <input type="submit" name="ucwords" value="Wykonaj">
        </form>
        <?php
        if (isset($_POST['ucwords'])) {
            echo "<h3>" . ucfirst($_POST['text']) . "</h3>";
        }
        ?>
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
    </main>
</body>
</html>