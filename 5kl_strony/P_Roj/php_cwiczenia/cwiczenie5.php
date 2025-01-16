
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
            <nav>
                <a href="index.php" class="button">Ćwiczenie 1</a>
                <a href="cwiczenie2.php" class="button">Ćwiczenie 2</a>
                <a href="cwiczenie3.php" class="button">Ćwiczenie 3</a>
                <a href="cwiczenie4.php" class="button">Ćwiczenie 4</a>
                <a href="cwiczenie5.php" class="button">Ćwiczenie 5</a>
            </nav>
            <blockquote>
                <q><?php
                $cytat[0]="Wiek nie ma znaczenia, chyba że jesteś serem";
                $autor[0]='Billie Burke';
                $cytat[1]="Jeżeli czegoś nie wolno, a bardzo się chce, to można";
                $autor[1]="Pani Bukowa";
                $cytat[2]="Życie to jest dobrze i źle. I tak jest dobrze. Bo jak jest tylko dobrze, to jest źle";
                $autor[2]="Ks. Jan Twardowski";
                $cytat[3]="Rób to, co możesz, tym, co posiadasz, i tam, gdzie jesteś";
                $autor[3]="Theodore Roosevelt";
                $cytat[4]="Szczęście to jedyna rzecz, która się mnoży, jeśli się ją dzieli";
                $autor[4]="Albert Schweitzer";
                $cytat[5]="Ludzie nie dlatego przestają się bawić, że się starzeją, lecz starzeją się, bo przestają się bawić";
                $autor[5]="Mark Twain";
                $cytat[6]="Myśleć to co prawdziwe, czuć to co piękne i kochać co dobre – w tym cel rozumnego życia";
                $autor[6]="Platon";
                $cytat[7]="W życiu nigdy nie jest za późno na trzy rzeczy: miłość, naukę i spełnianie marzeń";
                $autor[7]="-";
                $cytat[8]="Kiedy mamy marzenia, ale nie próbujemy ich spełniać, życie staje się koszmarem.";
                $autor[8]="Daren Aronofsky";
                $cytat[9]="Nie rozpaczaj, że ludzie Cię nie rozumieją. Martw się tym, że to ty nie rozumiesz ludzi";
                $autor[9]="Konfucjusz";
                $cytat[10]="Nie wydawaj wyroku, zanim nie wysłuchasz przeciwnej strony";
                $autor[10]="Eurypides";
                $i=rand(0,10);
                echo $cytat[$i];
                echo "</q>" . "<p>$autor[$i]</p>"
                ?>
            </blockquote>
        </main>
    </body>
</html>
