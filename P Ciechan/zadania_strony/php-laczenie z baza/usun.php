<?php
    $con = mysqli_connect("localhost", "root", "", "ksiegarnia");
    $link = "http://localhost/Szkola/P%20Ciechan/zadania_strony/php-laczenie%20z%20baza";
    if(mysqli_connect_error()){
        $_SESSION['blad'] = "Błąd połączenia (usun): " . mysqli_connect_error();
        exit();
    }else{
        $id=$_GET["id"];
        $zapytanie = mysqli_query($con, "delete from ksiazki where id=$id");
        header("Location: index.php");
    }
    mysqli_close($con)
?>