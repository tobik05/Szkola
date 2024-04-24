
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
            <form action="" method="post">
                2. Wprowadź n elementów Fibonacciego
                <input type="number" placeholder="Wprowadź liczbę" name="liczba_fibo"><br>
                3. Wprowadź wysokość piramidy
                <input type="number" placeholder="Wprowadź liczbę" name="liczba_wysokosc"><br>
                4. Wprowadź liczbę do obliczenia silni
                <input type="number" placeholder="Wprowadź liczbę" name="liczba_silnia"><br>
                5. Wprowadź liczbę do obliczenia dzielników
                <input type="number" placeholder="Wprowadź liczbę" name="liczba_dzielnik"><br>
                <input type="submit" value="Oblicz">
            </form>
            <?php
                
                //zadanie 1
                echo "<br><div class='pi'>Zadanie 1<br>";
                $n =  1000000;
                $dokladnosc = 100;
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
                $x=0;
                $y=1;
                if(isset($_POST["liczba_fibo"])){
                    if($_POST["liczba_fibo"]!=""){
                        $fibo=$_POST["liczba_fibo"];
                    }  else{
                        $fibo = 5;
                    }
                } else{
                    $fibo = 5;
                }
                for($i=0; $i<$fibo; $i++){
                    echo $y . " ";
                    $y+=$x;
                    $x=$y-$x;
                }
                echo $fibo;
                echo "</div>";
                
                //zadanie 3
                echo "<br><div class='piramida'>Zadanie 3<br>";
                if(isset($_POST["liczba_wysokosc"])){
                    if($_POST["liczba_wysokosc"]!=""){
                        $wysokosc = $_POST["liczba_wysokosc"];
                    }  else{
                        $wysokosc = 5;
                    }
                } else{
                    $wysokosc = 5;
                }
                for($i=1; $i<=$wysokosc; $i++){
                    for($k=1; $k<=$i; $k++){ 
                        echo " * "; //$k;
                    }
                    echo "<br>";
                }
                echo "</div>";

                //zadanie 4
                echo "<br><div class='silnia'>Zadanie 4<br>";
                if(isset($_POST["liczba_silnia"])){
                    if($_POST["liczba_silnia"]!=""){
                        $liczba_silnia=$_POST["liczba_silnia"];
                    }  else{
                        $liczba_silnia = 5;
                    }
                } else{
                    $liczba_silnia = 5;
                }
                $silnia=1;
                for($i=$liczba_silnia; $i>1; $i--){
                    $silnia=$silnia*$i;
                }
                echo $silnia;
                echo "</div>";

                //zadanie 5
                echo "<br><div class='dzielnik'>Zadanie 5<br>";
                if(isset($_POST["liczba_dzielnik"])){
                    if($_POST["liczba_dzielnik"]!=""){
                        $liczba_dzielnik=$_POST["liczba_dzielnik"];
                    }  else{
                        $liczba_dzielnik = 28;
                    }
                } else{
                    $liczba_dzielnik = 28;
                }
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
