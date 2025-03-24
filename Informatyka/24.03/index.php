<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Symulacja meczu tenisa</title>
</head>
<body>
    <h2>Symulacja meczu tenisa</h2>
    <form action="simulate.php" method="post">
        <label for="player_a">Nazwisko zawodnika A:</label>
        <input type="text" id="player_a" name="player_a" required><br>
        
        <label for="elo_a">Ranking ELO dla zawodnika A:</label>
        <input type="number" id="elo_a" name="elo_a" required><br>
        
        <label for="player_b">Nazwisko zawodnika B:</label>
        <input type="text" id="player_b" name="player_b" required><br>
        
        <label for="elo_b">Ranking ELO dla zawodnika B:</label>
        <input type="number" id="elo_b" name="elo_b" required><br>
        
        <button type="submit">Symuluj mecz</button>
    </form>
</body>
</html>