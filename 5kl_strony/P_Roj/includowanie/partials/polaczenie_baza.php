<?php 
session_start();
$baza=mysqli_connect("localhost","root","",database: "produkty");
if (mysqli_connect_errno()){
    echo "Wystąpił błąd połączenia z bazą";
}
?>