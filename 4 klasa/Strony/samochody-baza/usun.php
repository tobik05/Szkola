<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "szkola");
if(mysqli_connect_errno()){
    printf("Połączenie nie udane: %s\n", mysqli_connect_error());
    exit();
}

if(isset($_GET["id"])){
    $id=$_GET["id"];
    $zapytanie3 = "delete from samochody where id=$id";
    $wynik3 = mysqli_query($con, $zapytanie3);
    if($wynik3){
        $_SESSION['succes']="<h3 class='succes'>Samochód został usunięty.</h3>";
        header('location:index.php');

    }else{
        $_SESSION['usuniecie']="<h3 class='error'>Wystąpił błąd, samochód nie został dodany.</h3>";
        header('location:index.php');
    }
    
}
?>