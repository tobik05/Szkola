<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "szkola");
if(mysqli_connect_errno()){
    printf("Połączenie nie udane: %s\n", mysqli_connect_error());
    exit();
}

if(isset($_POST["dodaj"])){
    $marka = $_POST["marka"];
    $model = $_POST["model"];
    $rok = $_POST["rok"];
    $przebieg = $_POST["przebieg"];
    $kolor = $_POST["kolor"];
    $zapytanie2 = "INSERT INTO samochody(marka,model,rok,przebieg,kolor) VALUE('$marka','$model','$rok','$przebieg','$kolor')";
    $wynik2 = mysqli_query($con, $zapytanie2);
    if($wynik2){
        $_SESSION['dodanie']="<h3 class='succes'>Samochód został dodany.</h3>";
        header('location:index.php');

    }else{
        $_SESSION['dodanie']="<h3 class='error'>Wystąpił błąd, samochód nie został dodany.</h3>";
        header('location:index.php');
    }
    
}
?>