<?php 
session_start();
$con=mysqli_connect("localhost","root","",database: "sklep");
if (mysqli_connect_errno()){
    echo "Wystąpił błąd połączenia z bazą";
}
?>