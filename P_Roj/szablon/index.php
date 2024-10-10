<?php include("partials/polaczenie_baza.php")?>
<!DOCTYPE html>
<html lang="pl">
    <?php include("partials/head.php");?>
<body>
<script src="https://kit.fontawesome.com/ef5f951ae9.js" crossorigin="anonymous"></script>
    <script src="script.js"></script>
        <header>
            <?php include("partials/header.php");?>
            <a id="koszyk"><i class="fa-solid fa-cart-shopping"></i></a>
        </header>
    <main>
        <section>
            <?php include("partials/side_menu.php");?>
            <section id="login">
                <h2>Logowanie</h2>
                <input type="text" id="nazwa_uzytkownika" placeholder="Nick">
                <input type="password" id="haslo" placeholder="Hasło">
                <input type="submit" value="Zaloguj" class='button'>
            </section>
            <section id="zakupy">
            <?php
                $wynik = mysqli_query($baza,"SELECT * FROM Produkty");
                while($row = mysqli_fetch_array($wynik)){
                    echo "<div class='produkt'>" . "<img class='brak_obrazu' src='images/brak_obrazu.png' alt='Brak obrazu'>" . "<br><p class='nazwa_produktu'>" . $row['nazwa'] . "</p><p class='cena_produktu'>" . $row['cena'] . " "; echo "</p><button class='button'>Dodaj</button></div>"; 
                }
                mysqli_close($baza);
            ?> 
            </section>
        </section>
    </main>
    <?php include("partials/footer.php")?>
</body>
</html>