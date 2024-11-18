<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data i czas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="sekcja">
        <h2>1. Aktualna data i czas:</h2>
        <?php 
        echo date("H:i:s d-m-Y");
        ?>
    </section>
    <section class="sekcja">
    <h2>2. Ile do wakacji</h2>
    <?php 
    $teraz=time();
    $dzien=mktime("09","00","00","04","5","2025");
    $wyliczone=date("Y-m-d H:i:s", ($teraz-$dzien));
    echo $wyliczone
    ?>
    </section>
    <section class="sekcja">
    <h2>3. Dzien tygodnia urodzin</h2>
    <?php 
    $dzien=mktime("00","00","00","09","26","2025");
    $dzien_tygodnia = date('w', $dzien);
    $dni_tygodnia = array( 'Niedziela', 'Poniedziałek', 'Wtorek', 'Środa', 'Czwartek', 'Piątek', 'Sobota' );
    echo $dni_tygodnia[$dzien_tygodnia];
    ?>
    </section>
    <section class="sekcja">
    <h2>4. Wyznaczanie daty za 14 dni</h2>
    <?php 
    echo date("d-m-Y", (time()+1209600));
    ?>
    </section>
    <section class="sekcja">
    <h2>5. Czy rok przestepny</h2>
    <form method="post">
        <input type="number" min="1900" max="2099" step="1" value="2024" name="rok_przestepny">
        <input type="submit" name="submit_przestepny" value="Sprawdź">
    </form>
    <?php
    if(isset($_POST['submit_przestepny'])){
        $rok=date("L",mktime(0,0,0,1,1,$_POST['rok_przestepny']));
        if($rok==1){
            echo "Rok jest przestępny.";
        }else{
            echo "Rok nie jest przestępny";
        }
    }
    ?>
    </section>
    <section class="sekcja">
    <h2>6. Następny poniedziąłek</h2>
    <?php 
    echo date("d-m-Y", (strtotime("next Monday")));
    ?>
    </section>
    <section class="sekcja">
    <h2>7. Obliczanie różnicy w godzinach</h2>
    <?php
    $czas = new Datetime("2024-12-10 16:00:00");
    $czas_projektu=new Datetime("2024-12-21 17:30:00");
    $roznica=$czas->diff($czas_projektu);
    echo "Do wakacji pozostało ";
    if(($roznica->days)>0){
        echo $roznica->days." dni ";
    }
    echo $roznica->h." godzin.";
    ?>
    </section>
    <section class="sekcja">
    <h2>8. Inne strefy czasowe</h2>
    <?php
        
    ?>
    </section>
</body>
</html>