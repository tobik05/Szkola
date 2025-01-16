<aside class="menu-buttons">
    <h2>Menu</h2>
    <?php
    if(isset($_SESSION['login'])){
        echo "<a class='button small-button' href='wyloguj.php'".";'>Wyloguj</a>";
    }else{
        echo "<a class='button small-button' href='logowanie.php'".";'>Zaloguj</a>";
    }
    ?>
    <a class="button small-button" href='index.php'">Strona główna</a>
    <button class="button small-button" onclick="pokaz('#kontakt')">Kontakt</button>
    <h2>Dział</h2>
    <button class="button small-button" onclick="pokaz('#silnik')">Silnik</button>
    <button class="button small-button" onclick="pokaz('#hamulce')">Hamulce</button>
    <button class="button small-button" onclick="pokaz('#nadwozie')">Nadwozie</button>
</aside>