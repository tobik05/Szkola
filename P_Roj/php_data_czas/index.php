<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data i czas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Aktualna data i czas:</h2>
    <?php 
    echo date("Y-m-d H:i:s");
    ?>
    <h2>Ile do wakacji</h2>
    <?php 
    $teraz=time();
    $dzien=mktime("09","00","00","04","5","2025");
    $sekund = $dzien-$teraz;
    $minut = (int)($sekund/60);
    $godzin = (int)($minut/60);
    $dni = (int)($godzin/24);
    $lat = (int)($dni/365);
    $sekund = (int)($sekund-$minut*60);
    $minut = (int)($minut-$godzin*60);
    $godzin = (int)($godzin-$dni*24);
    $dni = (int)($dni-$lat*365);
    echo "lat: $lat dni: $dni godzin: $godzin minut: $minut sekund: $sekund";
    ?>
    <h2></h2>
</body>
</html>