<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="Tobiasz, Bielawski, Strony, PHP">
        <meta name="author" content="Tobiasz Bielawski">
        <link rel="stylesheet" href="style2.css">
        <link rel="icon" type="image/x-icon" href="logo.png">
        <title>Tobiasz Bielawski</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    </head>
    <body>
        <main >
        <?php 
            $ocena1[6]="Zgodnie współpracuje w grupie rówieśniczej. Jest koleżeński/a i uprzejmy/a.";
            $ocena1[5]="Łatwo nawiązuje kontakty z rówieśnikami. Dokonuje samooceny swojego zachowania.";
            $ocena1[4]="Czasami ma trudności z nawiązywaniem kontaktow z rówieśnikami. Jest nieśmiały.";
            $ocena1[3]="Nie potrafi zgodnie współpracować z rówieśnikami.";
            $ocena1[2]="Nie potrafi zapanować nad emocjami. Izoluje się od grupy rówieśniczej.";
            $ocena1[1]="Jest konfliktowy/a w kontaktach z rówieśnikami. Stouje przemoc.";
            $ocena2[6]="Prezentuje wysoką kulturę osobistą.";
            $ocena2[5]="Stosuje zwroty grzecznościowe. Jest zawsze uprzejmy/a i kulturalny/a";
            $ocena2[4]="Jest dość aktywny/a na zajęciach. Nie zawsze jest przygotowany do zajęć. Pracuje w umiarkowanym tempie. Uczęszcza systematycznie i punktualnie do szkoty.";
            $ocena2[3]="Czesto nie odrabia zadan domowych. Jest mato aktywny/a na zajeciach.";
            $ocena2[1]="Pracuje w bardzo wolnym tempie. Nie odrabia zadan domowych. Lekceważy obowiązki ucznia, nie uczy się, nie wypełnia poleceń nauczyciela.";
            $ocena3[6]="Samodzielnie pracuje w czasie zajęć. Jest wytrwały/a w czasie wykonywania zadań.";
            $ocena3[5]="Czesto pracuje samodzielnie. Potrafi skupić swoja wagę na wykonywanym zadaniu.";
            $ocena3[4]="Czasami pracuje samodzielnie. Wymaga zachęty do pracy. Wykonuje zadania szybko i niezbyt starannie.";
            $ocena3[3]="Czesto nie odrabia zadan domowych. Jest mato aktywny/a na zajeciach.";
            $ocena3[2]="Jest bierny/a podczas zajec. Pracuje w wolnym tempie. Rzadko odrabia zadania domowe. Jest niesystematyczny/a i niesumienny/a w nauce.";
            $ocena3[1]="Pracuje w bardzo wolnym tempie. Nie odrabia zadan domowych. Lekceważy obowiązki ucznia, nie uczy się, nie wypełnia poleceń nauczyciela.";
            $ocena4[6]="Samodzielnie pracuje w czasie zajęć. Jest wytrwały/a w czasie wykonywania zadań.";
            $ocena4[5]="Czesto pracuje samodzielnie. Potrafi skupić swoja wagę na wykonywanym zadaniu.";
            $ocena4[4]="Czasami pracuje samodzielnie. Wymaga zachęty do pracy. Wykonuje zadania szybko i niezbyt starannie.";
            $ocena4[3]="Oczekuje pomocy nauczyciela przy wykonywaniu zadań. Nie potrafi skupic sie na wykonywanym zadaniu. Wymaga zachety do pracy.";
            $ocena4[2]="Czesto potrzebuje pomocy ze strony nauczyciela. Jest nieuważny/a i rozkojarzony/a w czasie zajęć. Szybko zniechęca sie do pracy. Ma problem z koncentracja uwagi.";
            $ocena4[1]="Pracuje tylko z pomocą nauczyciela. Przeszkadza innym w pracy.";
            $ocena5[6]="Słucha uwaznie polecen nauczyciela i stosuje sie do nich. Wyróznia sie wysoka kultura osobista.";
            $ocena5[5]="Potrafi zachowa sie stosownie do róznych sytuacji. Jest zdyscyplinowany/a.";
            $ocena5[4]="Niedokładnie wykonuje polecenia nauczyciela. Nie sprawia klopotów wychowawczych. Czasami nie potrafi zachowa sie stosownie do róznych ";
            $ocena5[3]="Czesto nie potrafi zachowa sie stosownie do róznych sytuacji. Jest niezdyscyplinowany.";
            $ocena5[2]="Nie potrafi zachowa sie stosownie do róznych sytuacji. Cechuje sie niska kultura osobista.";
            $ocena5[1]="Sprawia poważne kłopoty wychowawcze. Przeszkadza podczas zajęć.";
            $ocena6[6]="Zawsze chetnie bierze czynny udziat w zyciu szkoly. Godnie reprezentuje szkote w konkursach pozaszkolnych.";
            $ocena6[5]="Czynnie uczestniczy w zyciu klasy i szkoty. Bierze aktywny udzial w konkursach i uroczystosciach szkolnych.";
            $ocena6[4]="Właściwie wywiązuje sie z powierzonych mu/jej zadań. Zachowuje wasciwa postawe podczas uroczystosci szkolnych.";
            $ocena6[3]="Szanuje sprzet szkolny oraz cudza i swoja wlasnos. Stara sie zachowac wasciwa postawe podczas uroczystosci szkolnych.";
            $ocena6[2]="Nie wywiazuje sie z zadan powierzonych przez nauczyciela. Nie przejawia troski o mienie szkoly.";
            $ocena6[1]="Niewlasciwie zachowuje sie podczas zajec i uroczystosci szkolnych. Niszczy sprzet szkolny.";
            if(isset($_POST["imie"])){
                $imie = $_POST["imie"];
            }else{
                $imie="";
            }
            if(isset($_POST["klasa"])){
                $klasa = $_POST["klasa"];
            }else{
                $klasa="";
            }
            if(isset($_POST["urodzona"])){
                $urodzona = $_POST["urodzona"];
            }else{
                $urodzona="";
            }
            if(isset($_POST["zam"])){
                $zam = $_POST["zam"];
            }else{
                $zam="";
            }
            if(isset($_POST["p"])){
                $plec = $_POST["p"];
            }else{
                $plec="";
            }
            if(isset($_POST["o1"])){
                (int)$o1 = $_POST["o1"];
            }else{
                (int)$o1="";
            }
            if(isset($_POST["o2"])){
                (int)$o2 = $_POST["o2"];
            }else{
                (int) $o2="";
            }
            if(isset($_POST["o3"])){
                (int)$o3 = $_POST["o3"];
            }else{
                (int)$o3="";
            }
            if(isset($_POST["o4"])){
                (int)$o4 = $_POST["o4"];
            }else{
                (int)$o4="";
            }
            if(isset($_POST["o5"])){
                (int)$o5 = $_POST["o5"];
            }else{
                (int)$o5="";
            }
            if(isset($_POST["o6"])){
                (int)$o6 = $_POST["o6"];
            }else{
                (int)$o6="";
            } 
            $suma = ($o1 + $o2 + $o3 + $o4 + $o5 + $o6);
            
            ?>
            <img src="logo.png">
            <p>Powiatowy Zespoł Szkół w Świebodzinie<br>
                ul. Zachodnia 76a<br>
                66-200 Świebodzin
            </p>
            <center><h3>Ocena z zachowania - opisowa</h3></center>
            <p>
                <?php 
                if($plec="Kobieta"){
                    echo "uczennica: $imie<br>";
                    echo "klasa: $klasa<br>";
                    echo "urodzona w dniu $urodzona<br>";
                    echo "zamieszkała: $zam<br>";
                } else if($plec="Mężczyzna"){
                    echo "uczeń: $imie<br>";
                    echo "klasa: $klasa<br>";
                    echo "urodzony w dniu $urodzona r.<br>";
                    echo "zamieszkały: $zam<br>";
                }
                if($suma>=34.56){
                    $ocena="wzorowe";
                }else if($suma>=32.4 && $suma<34.56){
                    $ocena="bardzo dobre";
                }else if($suma>=27 && $suma<32.4){
                    $ocena="dobre";
                }else if($suma>=19.8 && $suma<27){
                    $ocena="poprawne";
                }else if($suma>=14.4 && $suma<19.8){
                    $ocena="nieodpowiednie";
                }else if($suma<14.4){
                    $ocena="naganne";
                }
                echo "<br>ocena z zachowania: $ocena";
                echo "<br><br>Uczeń $imie $ocena1[$o1] $ocena2[$o2] $ocena3[$o3] $ocena4[$o4] $ocena5[$o5] $ocena6[$o6]";
                ?>
            </p>
            <div class="niewidoczny"><button onClick="window.print()">Wydrukuj</button></div>
        </main>
    </body>
</html