<?php include("partials/polaczenie_baza.php")?>
<!DOCTYPE html>
<html lang="pl">
    <?php include("partials/head.php");?>
<body>
<script src="https://kit.fontawesome.com/ef5f951ae9.js" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <main>
        <section>
            <?php
            if(isset($_SESSION['poziom'])){
                $poziom=$_SESSION['poziom'];
            }else{
                $poziom=0;
            }
            if($poziom==100){
                include("partials/admin_side_menu.php");
            }else if($poziom==50){
                include("partials/manager_side_menu.php");
            }
            else{
                include("partials/user_side_menu.php");
            }
            ?>
            <section class="form">
                <h2>Rejestracja</h2>
                <form method="post" enctype="multipart/form-data" class="pion">
                    <h1>Dodawanie samochodu</h1>
                    <input type="text" name="nazwa" placeholder="Nazwa" required>
                    <input type="umber" name="cena" placeholder="Cena" required>
                    <input type="number" name="ilosc" placeholder="Ilość" required>
                    <input type="text" name="kategoria" placeholder="Kategoria" required>
                    <input type="file" name="zdjecie" accept="image/*" required>
                    <input type="submit" name="dodaj_towar" value="Dodaj towar">
                </form>
                <?php
                if (isset($_POST['dodaj_towar'])) {
                    $nazwa = $_POST['nazwa'];
                    $cena = $_POST['cena'];
                    $ilosc = $_POST['ilosc'];
                    $kategoria = $_POST['kategoria'];

                    if(isset($_FILES['zdjecie']) && $_FILES['zdjecie']['error'] == 0){
                        $nazwa_obrazu = $_FILES['zdjecie']['name'];
                        $sciezka_docelowa = basename($nazwa_obrazu);
                        if(move_uploaded_file($_FILES['zdjecie']['tmp_name'], $sciezka_docelowa)){
                            $zapytanie = "INSERT INTO produkty (nazwa, cena, ilosc, kategoria_produktu, obraz) VALUES ('$nazwa', '$cena', '$ilosc', '$kategoria', '$nazwa_obrazu')";
                            if(mysqli_query($con, $zapytanie)){
                                echo "Produkt został dodany!";
                            } else {
                                echo "Błąd przy dodawaniu produktu: " . mysqli_error($con);
                            }
                        }else{
                            echo "Wystąpił błąd przy przesyłaniu pliku.";
                        }
                    }else{
                        echo "Nie wybrano pliku lub wystąpił błąd przy przesyłaniu.";
                    }
                }
                ?>
            </section>
    </main>
    <?php include("partials/footer.php")?>
</body>
</html>