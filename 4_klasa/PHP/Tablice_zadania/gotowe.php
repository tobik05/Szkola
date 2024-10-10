<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="Tobiasz, Bielawski, Strony, PHP">
        <meta name="author" content="Tobiasz Bielawski">
        <link rel="stylesheet" href="style.css">
        <title>Tobiasz Bielawski</title>
    </head>
    <script src="script.js"></script>
    <body>
        <main>
            <?php
                //zadanie 1, 2, 3 - utworzenie tablicy 
                $tab1 = array(10);
                $tab2 = array(10);
                $tab3 = array(10);


                //zadanie 1 - wczytanie danych do tablicy 1
                for($x=0; $x<=9; $x++){
                    if(isset($_POST["dane$x"])){
                        $tab1[$x]=$_POST["dane$x"];
                    }
                }
                echo "<div class='wynik'>Zadanie 1 - wczytanie tablicy 1</div>";
                echo "Tablica 1: ";
                for($x=0; $x<=9; $x++){
                    echo $tab1[$x] . " | ";
                }


                //zadanie 2 - zamiana wartości 7 komórki
                $tab1[6]=12;
                echo "<div class='wynik'>Zadanie 2 - zamiana zawartości komórki nr 7</div>";
                echo "Tablica 1: ";
                for($x=0; $x<=9; $x++){
                    echo $tab1[$x] . " | ";
                }
                echo "<div class='wynik'>Dane nr 5 to: " . $tab1[4] . "</div>";


                //zadanie 3 - przepisanie wartości z tablicy 1 do tabloicy 2
                for($x=0; $x<=9; $x++){
                    $tab2[$x]=$tab1[$x];
                }
                echo "<div class='wynik'>Zadanie 3 - przypisanie tablicy 1 do tablicy 2</div>";
                echo "Tablica 1: ";
                for($x=0; $x<=9; $x++){
                    echo $tab1[$x] . " | ";
                }
                echo "<br>";
                echo "Tablica 2: ";
                for($x=0; $x<=9; $x++){
                    echo $tab2[$x] . " | ";
                }


                // zadanie 4 zlaczenie tablicy 1 i tablicy 2 do tablicy 3
                for($x=0; $x<=9; $x++){
                    $tab3[$x]= (int)$tab1[$x] + (int)$tab2[$x];
                }
                echo "<div class='wynik'>Zadanie 4 - zsumowanie tablicy 1 i tablicy 2 do tablicy 3</div>";
                echo "<br>";
                echo "Tablica 1: ";
                for($x=0; $x<=9; $x++){
                    echo $tab1[$x] . " | ";
                }
                echo "<br>";
                echo "Tablica 2: ";
                for($x=0; $x<=9; $x++){
                    echo $tab2[$x] . " | ";
                }
                echo "<br>";
                echo "Tablica 3: ";
                for($x=0; $x<=9; $x++){
                    echo $tab3[$x] . " | ";
                }


                // zadanie 5 przepisanie tablicy 1 do tablicy 2 w odwrotnej kolejnosci
                $y=0;
                for($x=9; $x>=0; $x--){
                    $tab2[$x]=$tab1[$y];
                    $y++;
                }
                echo "<div class='wynik'>Zadanie 5 - przepisanie tablicy 1 do tablicy 2 w odwrotnej kolejności</div>";
                echo "<br>";
                echo "Tablica 1: ";
                for($x=0; $x<=9; $x++){
                    echo $tab1[$x] . " | ";
                }
                echo "<br>";
                echo "Tablica 2: ";
                for($x=0; $x<=9; $x++){
                    echo $tab2[$x] . " | ";
                }
            ?>
        </main>
    </body>
</html>