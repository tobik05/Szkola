<?php
    $ile = 0;
    for($i = 1; $i<=10; $i++){ 
        ${"imie_" . $i} = isset($_POST["imie_" . ($i)]) ? $_POST["imie_" . ($i)] : "";
        ${"nazwisko_" . $i} = isset($_POST["nazwisko_" . ($i)]) ? $_POST["nazwisko_" . ($i)] : "";
        ${"email_" . $i} = isset($_POST["email_" . ($i)]) ? $_POST["email_" . ($i)] : "";
        ${"wiek_" . $i} = isset($_POST["wiek_" . ($i)]) ? $_POST["wiek_" . ($i)] : "";

        if((${"imie_" . $i}!="") & (${"nazwisko_" . $i}!="") & (${"email_" . $i}!="") & (${"wiek_" . $i}!="")){
            ${"osoba" . $i} = array ('imie' => ${"imie_" . $i}, 'nazwisko' => ${"nazwisko_" . $i}, 'email' => ${"email_" . $i}, 'wiek' => ${"wiek_" . $i});
            //${"osoba" . $i} = array ('imie' => ${"imie_" . $i}, 'nazwisko' => ${"nazwisko_" . $i}, 'email' => ${"email_" . $i}, 'wiek' => ${"wiek_" . $i});
            $ile++;
        } else{
            break;
        }
    }
    $srednia = 0;
    $ile2 = 0;
    $ile_niepelnoletnich = 0;
    $ile_pelnoletnich = 0;
    $ile_kobiet = 0;
    $ile_mezczyzn = 0;
    $ile_ponad = 0;
    for($i = 1; $i<=$ile; $i++){ 

        $srednia += ${"osoba" . $i}['wiek'];
        $ile2++;
        if(${"osoba" . $i}['wiek']>18){
            $ile_niepelnoletnich++;
        } else {
            $ile_pelnoletnich++;
        }
        if((${"osoba" . $i}['wiek']>=18) || (${"osoba" . $i}['wiek']<=60)){
            $ile_kobiet++;
        }
        if((${"osoba" . $i}['wiek']>=18) || (${"osoba" . $i}['wiek']<=65)){
            $ile_mezczyzn++;
        }
        if((${"osoba" . $i}['wiek']>65)){
            $ile_ponad++;
        }
    }
    $srednia = $srednia/$ile2;
?>

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
            <h3>Średni wiek: </h3><?php echo $srednia?>
            <h3>Osób niepełnoletnich: </h3><?php echo $ile_niepelnoletnich?>
            <h3>Osób pełnoletnich: </h3><?php echo $ile_pelnoletnich?>
            <h3>Kobiet w wieku produkcyjnym: <?php echo $ile_kobiet?></h3>
            <h3>Mężczyzn w wieku produkcyjnym: <?php echo $ile_mezczyzn?></h3>
            <h3>Osób w wieku ponad produkcyjnym: <?php echo $ile_ponad?></h3>
        </main>
    </body>
</html>