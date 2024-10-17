<form method="post">
    <input type="text" name="marka" required>
    <input type="text" name="model" required>
    <input type="number" name="rok" max="2024" required>
    <input type="text" name="nazwa_pliku" required>
    <input type="submit" name="dodaj_auto" value="Dodaj auto">
</form>
<?php
    if(isset($_POST['dodaj_auto'])){
        $marka=$_POST['marka'];
        $model=$_POST['model'];
        $rok=$_POST['rok'];
        $nazwa_pliku=$_POST['nazwa_pliku'];
        $polaczenie=mysqli_connect("localhost", "root", "", "auta");
        mysqli_query($polaczenie, "INSERT INTO samochody (marka, model, rok, nazwa_pliku) VALUES('$marka', '$model', '$rok', '$nazwa_pliku');");
    }
?>