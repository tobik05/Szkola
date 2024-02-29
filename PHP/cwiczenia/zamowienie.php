<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="Tobiasz, Bielawski, Strony, PHP">
        <meta name="author" content="Tobiasz Bielawski">
        <link rel="stylesheet" href="style.css">
        <link rel="icon" type="image/x-icon" href="logo.png">
        <title>Tobiasz Bielawski - Zadanie</title>
    </head>
    <body>
        <main>
            <ul class="zamowienie">
                <?php
                $odbior=$_POST["odbior"];
                $imie=$_POST["imie"];
                $nazwisko=$_POST["nazwisko"];
                $nr=$_POST["nr"];
                $hamburger1="";
                $hamburger1=$_POST["hamburger1"];
                $hamburger2="";
                $hamburger2=$_POST["hamburger2"];
                $hamburgery=$hamburger1."<br>".$hamburger2;
                $inne1=$_POST["inne1"];
                $inne1="";
                $inne2=$_POST["inne2"];
                $inne2="";
                $inne=$inne1."<br>".$inne2;
                echo "<li>Imię: $imie</li>";
                echo "<li>Nazwisko: $nazwisko</li>";
                echo "<li>Nr rejestracyjny: $nr</li>";
                echo "Burgery:";
                echo "<li>$hamburgery</li>";
                echo "Inne:";
                echo "<li>$inne</li>";
                ?>
            </ul>
        </main>
    </body>
</html>
