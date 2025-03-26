<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Symulacja Meczu Tenisa</title>
</head>
<body>
    <h2>Symulacja Meczu Tenisa</h2>
    <form method="post" action="simulate.php">
        <label>Ranking ELO - Zawodnik A:</label>
        <input type="number" name="elo_a" required><br>

        <label>Ranking ELO na nawierzchni - Zawodnik A:</label>
        <input type="number" name="elo_surface_a" required><br>

        <label>Średnia forma (ostatnie 5 meczów) - Zawodnik A:</label>
        <input type="number" step="0.01" name="form_a" required><br>

        <label>Bezpośrednie pojedynki (H2H) - Zawodnik A:</label>
        <input type="number" name="h2h_a" required><br>

        <label>Zmęczenie (liczba setów w ostatnich 5 meczach) - Zawodnik A:</label>
        <input type="number" name="fatigue_a" required><br>

        <label>% wygranych punktów przy swoim serwisie - Zawodnik A:</label>
        <input type="number" step="0.01" name="serve_a" required><br>

        <label>% wygranych punktów przy returnie - Zawodnik A:</label>
        <input type="number" step="0.01" name="return_a" required><br>

        <hr>

        <label>Ranking ELO - Zawodnik B:</label>
        <input type="number" name="elo_b" required><br>

        <label>Ranking ELO na nawierzchni - Zawodnik B:</label>
        <input type="number" name="elo_surface_b" required><br>

        <label>Średnia forma (ostatnie 5 meczów) - Zawodnik B:</label>
        <input type="number" step="0.01" name="form_b" required><br>

        <label>Bezpośrednie pojedynki (H2H) - Zawodnik B:</label>
        <input type="number" name="h2h_b" required><br>

        <label>Zmęczenie (liczba setów w ostatnich 5 meczach) - Zawodnik B:</label>
        <input type="number" name="fatigue_b" required><br>

        <label>% wygranych punktów przy swoim serwisie - Zawodnik B:</label>
        <input type="number" step="0.01" name="serve_b" required><br>

        <label>% wygranych punktów przy returnie - Zawodnik B:</label>
        <input type="number" step="0.01" name="return_b" required><br>

        <br>
        <input type="submit" value="Symuluj Mecz">
    </form>
</body>
</html>