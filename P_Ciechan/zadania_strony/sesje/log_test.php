<!DOCTYPE html>     
<html lang="pl">     
<head>
    <meta charset="UTF-8"> 
    <title>SESJE - ĆWICZENIA</title>
</head>
<body>
    <form method="POST">
    LOGIN <input type="text" name="login"><br>
	HASŁO<input type="password" name="haslo"><br> 
	<input type="submit" value="zaloguj" name="logowanie">
    </form>   
    <?php
    if(isset($_POST["logowanie"])){
        $login=$_POST["login"];
        $haslo=$_POST["haslo"];
        $pol=mysqli_connect("localhost","root","","users");
        $zapytanie=mysqli_query($pol,"Select * from users where login='$login' and haslo='$haslo'");
        if(mysqli_num_rows($zapytanie)>0){
            $_SESSION["zalogowany"]="tak";
            exit(header("Location:index.php"));
        }
    }
    ?>
    <br>
    <p>NIE POSIADASZ KONTA: <a href="rejestracja.php"> REJESTRACJA </a></p>
</body>
</html>



