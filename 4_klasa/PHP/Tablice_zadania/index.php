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
            <h1>Witaj!</h1>
            <h3>Wprowadź 10 danych w poniższym polu, a następnie zobaczysz co wprowadziłeś.</h3>
            <form action="gotowe.php" method="POST" name="dane">
                <input id="dane" type="number" name="dane0" placeholder="Nr 1">
                <input id="dane" type="number" name="dane1" placeholder="Nr 2">
                <input id="dane" type="number" name="dane2" placeholder="Nr 3">
                <input id="dane" type="number" name="dane3" placeholder="Nr 4">
                <input id="dane" type="number" name="dane4" placeholder="Nr 5">
                <input id="dane" type="number" name="dane5" placeholder="Nr 6">
                <input id="dane" type="number" name="dane6" placeholder="Nr 7">
                <input id="dane" type="number" name="dane7" placeholder="Nr 8">
                <input id="dane" type="number" name="dane8" placeholder="Nr 9">
                <input id="dane" type="number" name="dane9" placeholder="Nr 10">
                <input type="submit" value="Wykonaj">
            </form>
        </main>
    </body>
</html>
