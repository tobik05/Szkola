<?php 
$conn = mysqli_connect("localhost", "root", "", "abc");
$zapytanie = "SELECT * from dane where id=2";
$rekord = mysqli_query($conn, $zapytanie);
mysqli_fetch_row($rekord);
?>