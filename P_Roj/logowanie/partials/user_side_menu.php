<aside class="menu-buttons">
    <h2>Menu</h2>
    <?php
    if(isset($_SESSION['login'])){
        echo "<button class='button' onclick='window.location.href="."http://localhost/Szkola/P_Roj/logowanie/wyloguj.php".";'>Wyloguj</button>";
    }else{
        echo "<button class='button' onclick='window.location.href=". "http://localhost/Szkola/P_Roj/logowanie/logowanie.php".";'>Zaloguj</button>";
    }
    ?>
    <button class="button" onclick="window.location.href='http://localhost/Szkola/P_Roj/logowanie/index.php';">Strona główna</button>
    <button class="button" onclick="pokaz('#kontakt')">Kontakt</button>
    <h2>Dział</h2>
    <button class="button" onclick="pokaz('#silnik')">Silnik</button>
    <button class="button" onclick="pokaz('#hamulce')">Hamulce</button>
    <button class="button" onclick="pokaz('#nadwozie')">Nadwozie</button>
</aside>