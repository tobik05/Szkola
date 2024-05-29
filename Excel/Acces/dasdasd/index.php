<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>UCZNIOWIE NASZEJ SZKOŁY</title>
	<link rel="stylesheet" href="styl.css">
</head>
<style>
table,tr,td,th
{
  border:2px solid red;
  border-collapse:collapse;
  text-align:center;
}

</style>

<body>
  <?php
     $polaczenie=mysqli_connect("localhost","root","","szkola");
	 
	 if($polaczenie) echo "Połączenie poprawne <br>";
	 else echo "NIESTETY NIE UDAŁO SIĘ POŁACZYC Z BAZĄ<br>";
	 
	 echo "<p><hr></p>";
	 echo " LISTA UCZNIÓW NASZEJ SZKOŁY";
	 echo "<table>";
	 echo "<tr><th>ID</th><th>Imię</th><th>Nazwisko</th><th>Klasa</th><tr>"; 
	 	 $wynik=mysqli_query($polaczenie,"SELECT * from uczniowie");
	 
     while($rekord=mysqli_fetch_array($wynik))
	 {
	    echo "<tr><td>".$rekord["id"]."</td><td>".$rekord["imie"]."</td><td>".$rekord["nazwisko"]."</td><td>".$rekord["klasa"]."</td></tr>";
	 }
     
	 echo "</table>";
	 mysqli_close($polaczenie);
   
  ?>
 
 <hr> <br>
 <form name="dodaj" action="index.php" method="POST">
 Imie <input type="text" name="imie"> <br>
 Nazwisko <input type="text" name="nazwisko"> <br>
 Klasa <input type="text" name="klasa"> <br>
 <input type="submit" name="dodaj" value="DODAJ DO BAZWY">
 </form>
 
<?php
  if(isset($_POST["dodaj"]))
  {
   
    $imie=$_POST["imie"];
	$nazwisko=$_POST["nazwisko"];
	$klasa=$_POST["klasa"];
	
	$polaczenie=mysqli_connect("localhost","root","","szkola");
	$zapytanie=mysqli_query($polaczenie,"INSERT INTO uczniowie(imie,nazwisko,klasa) VALUE('$imie','$nazwisko','$klasa')" );
	if($zapytanie) echo "REKORD:".$imie." ".$nazwisko." ZOSTAŁ DODANY DO BAZY ";
	else echo "COŚ POSZŁO NIE TAK";
	mysqli_close($polaczenie);
    
  }



?>
 
 
 
</body>
</html>