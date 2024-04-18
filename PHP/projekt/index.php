
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
            <form action="gotowe.php"  method="post" name="relacje">
                <h3>Relacje z rówieśnikami</h3>
                <div class="col col-1">
                    <label for="o1"><input type="radio" value="1" id="o1" name="o1">Zgodnie współpracuje w grupie rówieśniczej. Jest koleżeński/a i uprzejmy/a.</label>
                    <label for="o2"><input type="radio" value="1" id="o2" name="o2">Czasami ma trudności z nawiązywaniem kontaktow z rówieśnikami. Jest nieśmiały.</label>
                    <label for="o3"><input type="radio" value="1" id="o3" name="o3">Jest konfliktowy/a w kontaktach z rówieśnikami. Stouje przemoc.</label>
                    <label for="o4"><input type="radio" value="1" id="o3" name="o4">Łatwo nawiązuje kontakty z rówieśnikami. Dokonuje samooceny swojego zachowania.</label>
                    <label for="o5"><input type="radio" value="1" id="o3" name="o5">Nie potrafi zapanować nad emocjami. Izoluje się od grupy rówieśniczej.</label>
                    <label for="o6"><input type="radio" value="1" id="o6" name="o6">Nie potrafi zgodnie współpracować z rówieśnikami.</label>
                </div>
                <h3>Kultura osobista</h3>
                <div class="col col-2">
                    <label for="2o1"><input type="radio" value="1" id="2o1" name="2o1">Prezentuje wysoką kulturę osobistą.</label>
                    <label for="2o2"><input type="radio" value="1" id="2o2" name="2o2">Obraża się na nauczyciela. Obraża nauczyciela i kolgów.</label>
                    <label for="2o3"><input type="radio" value="1" id="2o3" name="2o3">Stara się stosować zwroty grzecznościowe.</label>
                    <label for="2o4"><input type="radio" value="1" id="2o3" name="2o4">Zapomina o stosowaniu zwrotów grzecznościowych.</label>
                    <label for="2o5"><input type="radio" value="1" id="2o3" name="2o5">Stosuje zwroty grzecznościowe. Jest zawsze uprzejmy/a i kulturalny/a</label>
                </div>
                <h3>Relacje z rówieśnikami</h3>
                <div class="col col-1">
                    <label for="3o1"><input type="radio" value="1" id="o1" name="o1">Zgodnie współpracuje w grupie rówieśniczej. Jest koleżeński/a i uprzejmy/a.</label>
                    <label for="3o2"><input type="radio" value="1" id="o2" name="o2">Czasami ma trudności z nawiązywaniem kontaktow z rówieśnikami. Jest nieśmiały.</label>
                    <label for="3o3"><input type="radio" value="1" id="o3" name="o3">Jest konfliktowy/a w kontaktach z rówieśnikami. Stouje przemoc.</label>
                    <label for="3o4"><input type="radio" value="1" id="o3" name="o4">Łatwo nawiązuje kontakty z rówieśnikami. Dokonuje samooceny swojego zachowania.</label>
                    <label for="3o5"><input type="radio" value="1" id="o3" name="o5">Nie potrafi zapanować nad emocjami. Izoluje się od grupy rówieśniczej.</label>
                    <label for="3o6"><input type="radio" value="1" id="o6" name="o6">Nie potrafi zgodnie współpracować z rówieśnikami.</label>
                </div>
                <input type="submit" value="Zakończ">
            </form>
        </main>
    </body>
</html>
