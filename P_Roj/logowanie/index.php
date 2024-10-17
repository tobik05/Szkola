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
            <?php
            $poziom=$_SESSION["poziom"];
            if($poziom==100){
                include("partials/admin_side_menu.php");
            }else if($poziom==50){
                include("partials/manager_side_menu.php");
            }
            else{
                include("partials/user_side_menu.php");
            }
            ?>
            <section id="zakupy">
            <?php
                $wynik = mysqli_query($con,"SELECT * FROM produkty");
                while($row = mysqli_fetch_array($wynik)){
                    echo "<div class='produkt'>" . "<img class='brak_obrazu' src='images/brak_obrazu.png' alt='Brak obrazu'>" . "<br><p class='nazwa_produktu'>" . $row['nazwa'] . "</p><p class='cena_produktu'>" . $row['cena'] . " "; echo "</p><button class='button'>Dodaj</button></div>"; 
                }
            ?> 
            </section>
            <section id="silnik" class="zakupy">
            <?php
                $wynik = mysqli_query($con,"SELECT * FROM produkty where kategoria_produktu='silnik'");
                while($row = mysqli_fetch_array($wynik)){
                    echo "<div class='produkt'>" . "<img  src='images/" . $row['obraz'] . ".png'>" . "<br><p class='nazwa_produktu'>" . $row['nazwa'] . "</p><p class='cena_produktu'>" . $row['cena'] . " "; echo "</p><button class='button'>Dodaj</button></div>"; 
                }
                mysqli_close($con);
            ?> 
            </section>
        </section>
    </main>
    <?php include("partials/footer.php")?>
</body>
</html>