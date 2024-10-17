<?php 
session_start();
$_SESSION['poziom']=0;
$con=mysqli_connect("localhost","root","",database: "sklep");
if (mysqli_connect_errno()){
    echo "Wystąpił błąd połączenia z bazą";
}
?>