<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autoulep</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <script src="script.js"></script>
    <header>
        <img src="logo.png" alt="Logo" id="logo">
        <h2>Autoulep</h2>
    </header>
    <main>
        <aside>
            <h3>Menu</h3>
            <section class="menu-buttons">
                <button class="button" onclick="pokaz('#login')">Login</button>
                <button class="button" onclick="pokaz('#zakupy')">Strona główna</button>
                <button class="button" onclick="pokaz('#kontakt')">Kontakt</button>
            </section>
        </aside>
        <section id="login">
            <h2>Logowanie</h2>
            <input type="text" id="nazwa_uzytkownika" placeholder="Nick">
            <input type="password" id="haslo" placeholder="Hasło">
            <input type="submit" value="Zaloguj" class='button'>
        </section>
        <section id="zakupy">
        <?php
            $baza=mysqli_connect("localhost","root","",database: "produkty");
            if (mysqli_connect_errno()){
                echo "Wystąpił błąd połączenia z bazą";
            }
            $wynik = mysqli_query($baza,"SELECT * FROM Produkty");
            while($row = mysqli_fetch_array($wynik)){
                echo "<div class='produkt'>" . "<img class='brak_obrazu' src='brak_obrazu.png' alt='Brak obrazu'>" . "<br><p class='nazwa_produktu'>" . $row['nazwa'] . "</p><p class='cena_produktu'>" . $row['cena'] . " "; echo "</p><button class='button'>Dodaj</button></div>"; 
            }
            mysqli_close($baza);
        ?> 
        </section>
    </main>
    <footer><h3>Stronę wykonał Tobiasz Bielawski</h3></footer>
</body>
</html>