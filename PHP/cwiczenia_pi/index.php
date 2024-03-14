
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
        <title>Tobiasz Bielawski</title>
    </head>
    <body>
        <main>
            <?php
                /*
                //zadanie 1
                echo "<br><div class='pi'>Zadanie 1<br>";
                $n =  10000000;
                $dokladnosc = 1000;
                bcscale($dokladnosc);
                $suma = 0;
                for ($i=0; $i < $n; $i++) {
                    $suma = bcadd($suma, bcdiv(pow(-1, $i), bcadd(1, bcmul(2, $i) )));
                }
                echo bcmul(4, $suma);
                echo "<br><hr><br>";
                echo "</div>";
                
                //zadanie 2
                echo "<br><div class='fibo'>Zadanie 2<br>";
                $fibo=0;
                $n = 20;
                for($i=0; $i<=$n; $i++){
                    echo $fibo . "<br>";
                    $fibo = $i+($i+1);
                }
                echo $fibo;
                echo "</div>";
                */
                //zadanie 3
                echo "<br><div class='piramida'>Zadanie 3<br>";
                $wysokosc = 15;
                for($i=1; $i<=$wysokosc; $i++){
                    for($k=1; $k<=$i; $k++){ 
                        echo " * "; //$k;
                    }
                    echo "<br>";
                }
                echo "</div>";

                //zadanie 4
                echo "<br><div class='silnia'>Zadanie 4<br>";
                $liczba_silnia=5;
                $silnia=1;
                for($i=$liczba_silnia; $i>1; $i--){
                    $silnia=$silnia*$i;
                }
                echo $silnia;
                echo "</div>";

                //zadanie 5
                echo "<br><div class='dzielnik'>Zadanie 5<br>";
                $liczba_dzielnik=28;
                for($i=1; $i<=$liczba_dzielnik; $i++){
                    if($liczba_dzielnik%$i==0){
                        echo $i . " ";
                    }
                }
                echo "</div>";
                ?>
        </main>
    </body>
</html>
