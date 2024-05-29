
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    </head>
    <body class="body2">
        <script src="script.js"></script>
        <main class="main2">
            <form action="gotowe.php"  method="post" name="relacje">
                <h2>Uczeń/Uczennica:</h2>
                <div class="col col-1">
                    <label for="imie">Imię i nazwisko: <input type="text" id="imie" name="imie"></label>
                    <label for="klasa">Klasa: <input type="text"  id="klasa" name="klasa"></label>
                    <label for="urodzona">Urodzona: <input type="text"  id="urodzona" name="urodzona"></label>
                    <label for="zam">Zamieszkanie: <input type="text"  id="zam" name="zam"></label>
                </div>
                <h2>Pleć</h2>
                <div class="col col-1">
                    <label for="p1"><input type="radio" value="Kobieta" id="p1" name="p">Kobieta</label>
                    <label for="p2"><input type="radio" value="Mężczyzna" id="p2" name="p">Mężczyzna</label>
                </div>
                <h2>Relacje z rówieśnikami.</h2>
                <div class="col col-2">
                    <label for="o1"><input type="radio" value="6" id="o1" name="o1">Zgodnie współpracuje w grupie rówieśniczej. Jest koleżeński/a i uprzejmy/a.</label>
                    <label for="o2"><input type="radio" value="4" id="o2" name="o1">Czasami ma trudności z nawiązywaniem kontaktow z rówieśnikami. Jest nieśmiały.</label>
                    <label for="o3"><input type="radio" value="1" id="o3" name="o1">Jest konfliktowy/a w kontaktach z rówieśnikami. Stouje przemoc.</label>
                    <label for="o4"><input type="radio" value="5" id="o4" name="o1">Łatwo nawiązuje kontakty z rówieśnikami. Dokonuje samooceny swojego zachowania.</label>
                    <label for="o5"><input type="radio" value="2" id="o5" name="o1">Nie potrafi zapanować nad emocjami. Izoluje się od grupy rówieśniczej.</label>
                    <label for="o6"><input type="radio" value="3" id="o6" name="o1">Nie potrafi zgodnie współpracować z rówieśnikami.</label>
                </div>
                <h2>Kultura osobista.</h2>
                <div class="col col-3">
                    <label for="2o1"><input type="radio" value="6" id="2o1" name="o2">Prezentuje wysoką kulturę osobistą.</label>
                    <label for="2o2"><input type="radio" value="1" id="2o2" name="o2">Obraża się na nauczyciela. Obraża nauczyciela i kolgów.</label>
                    <label for="2o3"><input type="radio" value="4" id="2o3" name="o2">Stara się stosować zwroty grzecznościowe.</label>
                    <label for="2o4"><input type="radio" value="3" id="2o4" name="o2">Zapomina o stosowaniu zwrotów grzecznościowych.</label>
                    <label for="2o5"><input type="radio" value="5" id="2o5" name="o2">Stosuje zwroty grzecznościowe. Jest zawsze uprzejmy/a i kulturalny/a</label>
                </div>
                <h2>Aktywność i obowiązkowość.</h2>
                <div class="col col-4">
                    <label for="3o1"><input type="radio" value="6" id="3o1" name="o3">Wykazuje dużą aktywność na zajęciach. Jest zawsze przygotowany/a do zajęć.</label>
                    <label for="3o2"><input type="radio" value="1" id="3o2" name="o3">Pracuje w bardzo wolnym tempie. Nie odrabia zadan domowych. Lekceważy obowiązki ucznia, nie uczy się, nie wypełnia poleceń nauczyciela.</label>
                    <label for="3o3"><input type="radio" value="5" id="3o3" name="o3">Jest aktywny/a na zajeciach. Pracuje w dobrym tempie. Uczy się pilnie i systematycznie, przezwycięża napotkane trudności.</label>
                    <label for="3o4"><input type="radio" value="2" id="3o4" name="o3">Jest bierny/a podczas zajec. Pracuje w wolnym tempie. Rzadko odrabia zadania domowe. Jest niesystematyczny/a i niesumienny/a w nauce.</label>
                    <label for="3o5"><input type="radio" value="3" id="3o5" name="o3">Czesto nie odrabia zadan domowych. Jest mato aktywny/a na zajeciach.</label>
                    <label for="3o6"><input type="radio" value="4" id="3o6" name="o3">Jest dość aktywny/a na zajęciach. Nie zawsze jest przygotowany do zajęć. Pracuje w umiarkowanym tempie. Uczęszcza systematycznie i punktualnie do szkoty.</label>
                </div>
                <h2>Samodzielność i koncentracja.</h2>
                <div class="col col-5">
                    <label for="4o1"><input type="radio" value="6" id="4o1" name="o4">Samodzielnie pracuje w czasie zajęć. Jest wytrwały/a w czasie wykonywania zadań.</label>
                    <label for="4o2"><input type="radio" value="5" id="4o2" name="o4">Czesto pracuje samodzielnie. Potrafi skupić swoja wagę na wykonywanym zadaniu.</label>
                    <label for="4o3"><input type="radio" value="2" id="4o3" name="o4">Czesto potrzebuje pomocy ze strony nauczyciela. Jest nieuważny/a i rozkojarzony/a w czasie zajęć. Szybko zniechęca sie do pracy. Ma problem z koncentracja uwagi.</label>
                    <label for="4o4"><input type="radio" value="4" id="4o4" name="o4">Czasami pracuje samodzielnie. Wymaga zachęty do pracy. Wykonuje zadania szybko i niezbyt starannie.</label>
                    <label for="4o5"><input type="radio" value="1" id="4o5" name="o4">Pracuje tylko z pomocą nauczyciela. Przeszkadza innym w pracy.</label>
                    <label for="4o6"><input type="radio" value="3" id="4o6" name="o4">Oczekuje pomocy nauczyciela przy wykonywaniu zadań. Nie potrafi skupic sie na wykonywanym zadaniu. Wymaga zachety do pracy.</label>
                </div>
                <h2>Zachowanie w różnych sytuacjach</h2>
                <div class="col col-6">
                    <label for="5o1"><input type="radio" value="1" id="5o1" name="o5">Sprawia poważne kłopoty wychowawcze. Przeszkadza podczas zajęć.</label>
                    <label for="5o2"><input type="radio" value="4" id="5o2" name="o5">Niedokładnie wykonuje polecenia nauczyciela. Nie sprawia klopotów wychowawczych. Czasami nie potrafi zachowa sie stosownie do róznych sytuacji.</label>
                    <label for="5o3"><input type="radio" value="3" id="5o3" name="o5">Czesto nie potrafi zachowa sie stosownie do róznych sytuacji. Jest niezdyscyplinowany.</label>
                    <label for="5o4"><input type="radio" value="2" id="5o4" name="o5">Nie potrafi zachowa sie stosownie do róznych sytuacji. Cechuje sie niska kultura osobista.</label>
                    <label for="5o5"><input type="radio" value="5" id="5o5" name="o5">Potrafi zachowa sie stosownie do róznych sytuacji. Jest zdyscyplinowany/a.</label>
                    <label for="5o6"><input type="radio" value="6" id="5o6" name="o5">Słucha uwaznie polecen nauczyciela i stosuje sie do nich. Wyróznia sie wysoka kultura osobista.</label>
                </div>
                <h2>Dbałość o honor i tradycje szkoły</h2>
                <div class="col col-7">
                    <label for="6o1"><input type="radio" value="1" id="6o1" name="o6">Niewlasciwie zachowuje sie podczas zajec i uroczystosci szkolnych. Niszczy sprzet szkolny.</label>
                    <label for="6o2"><input type="radio" value="4" id="6o2" name="o6">Właściwie wywiązuje sie z powierzonych mu/jej zadań. Zachowuje wasciwa postawe podczas uroczystosci szkolnych.</label>
                    <label for="6o3"><input type="radio" value="3" id="6o3" name="o6">Szanuje sprzet szkolny oraz cudza i swoja wlasnos. Stara sie zachowac wasciwa postawe podczas uroczystosci szkolnych.</label>
                    <label for="6o4"><input type="radio" value="2" id="6o4" name="o6">Nie wywiazuje sie z zadan powierzonych przez nauczyciela. Nie przejawia troski o mienie szkoly.</label>
                    <label for="6o5"><input type="radio" value="5" id="6o5" name="o6">Czynnie uczestniczy w zyciu klasy i szkoty. Bierze aktywny udzial w konkursach i uroczystosciach szkolnych.</label>
                    <label for="6o6"><input type="radio" value="6" id="6o6" name="o6">Zawsze chetnie bierze czynny udziat w zyciu szkoly. Godnie reprezentuje szkote w konkursach pozaszkolnych.</label>
                </div>
                <input type="submit" value="Zakończ">
            </form>
        </main>
    </body>
</html>
