<!DOCTYPE html>     
<html lang="pl">     
 <head>
  <meta charset="UTF-8"> 
  <title>PLIKI COOKIE - ĆWICZENIA</title>
 </head>
<body>
 <form method="POST" >
  Imię i nazwisko: <input type="text" name="dane"> <br>
  HASŁO: <input type="password" name="haslo"> <br>
  <button> ZALOGUJ </button>
 </form>
 <hr>
 <?php
   if(!isset($_COOKIE["odwiedziny"]))
   {
     $licznik=1;
	 setcookie("odwiedziny",$licznik,time()+30,"/","localhost");
	 echo " WITAJ NA STRONIE - JESTEŚ TU NOWY ";
   }
   else
   {
      $licznik=$_COOKIE["odwiedziny"];
	  $licznik++;
      echo " WITAJ PONOWNIE- JESTEŚ TU JUŻ PO RAZ: ".$licznik;
	  setcookie("odwiedziny",$licznik,time()+30,"/","localhost");
   }
   
   if(isset($_POST["dane"]))
    {
      $dane=$_POST["dane"];
	  setcookie("dane",$dane,time()+30,"/","localhost");
	  echo "<br>JESTEŚ ZALOGOWANY JAKO: ".$dane;
    }   
	else if(isset($_COOKIE["dane"]))
	{
	  echo "<br>JESTEŚ ZALOGOWANY JAKO: ".$_COOKIE["dane"];
	}
   
	
 
 
 ?>
 
  
</body>
</html>



