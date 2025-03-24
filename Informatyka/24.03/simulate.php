<?php
function elo_probability($elo_a, $elo_b) {
    return 1 / (1 + pow(10, ($elo_b - $elo_a) / 400));
}

function simulate_game($prob_a) {
    $points_a = 0;
    $points_b = 0;
    while (true) {
        if (mt_rand() / mt_getrandmax() < $prob_a) {
            $points_a++;
        } else {
            $points_b++;
        }
        if ($points_a >= 4 && $points_a - $points_b >= 2) return "A";
        if ($points_b >= 4 && $points_b - $points_a >= 2) return "B";
    }
}

function simulate_set($prob_a) {
    $games_a = 0;
    $games_b = 0;
    while (true) {
        if (simulate_game($prob_a) == "A") {
            $games_a++;
        } else {
            $games_b++;
        }
        if ($games_a >= 6 && $games_a - $games_b >= 2) return [$games_a, $games_b];
        if ($games_b >= 6 && $games_b - $games_a >= 2) return [$games_a, $games_b];
    }
}

function simulate_match($elo_a, $elo_b, $best_of = 3) {
    $prob_a = elo_probability($elo_a, $elo_b);
    $sets_needed = floor($best_of / 2) + 1;
    $sets_a = 0;
    $sets_b = 0;
    $set_results = [];
    $total_games_a = 0;
    $total_games_b = 0;
    
    while ($sets_a < $sets_needed && $sets_b < $sets_needed) {
        list($games_a, $games_b) = simulate_set($prob_a);
        $set_results[] = "$games_a-$games_b";
        $total_games_a += $games_a;
        $total_games_b += $games_b;
        
        if ($games_a > $games_b) {
            $sets_a++;
        } else {
            $sets_b++;
        }
    }
    
    $handicap = $total_games_a - $total_games_b;
    return [$set_results, $handicap, $total_games_a, $total_games_b, $prob_a];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $player_a = $_POST["player_a"];
    $elo_a = (int) $_POST["elo_a"];
    $player_b = $_POST["player_b"];
    $elo_b = (int) $_POST["elo_b"];
    
    list($sets, $handicap, $total_games_a, $total_games_b, $prob_a) = simulate_match($elo_a, $elo_b);
    
    $prob_b = 1 - $prob_a;
    $prob_2_0 = $prob_a * $prob_a;
    $prob_2_1 = 2 * $prob_a * $prob_b * $prob_a;
    $prob_1_2 = 2 * $prob_b * $prob_a * $prob_b;
    $prob_0_2 = $prob_b * $prob_b;
    $prob_win_a = $prob_2_0 + $prob_2_1;
    $prob_win_b = $prob_0_2 + $prob_1_2;
    
    echo "<h2>Mecz: $player_a ($prob_win_a%) vs $player_b ($prob_win_b%)</h2>";
    echo "<h3>Wynik:</h3>";
    foreach ($sets as $i => $result) {
        echo "Set " . ($i+1) . ": $result<br>";
    }
    echo "<p>Liczba gemów w meczu: " . ($total_games_a + $total_games_b) . "</p>";
    echo "<p>Handicap setów: $handicap</p>";
    echo "<h3>Prawdopodobieństwo wyników:</h3>";
    echo "<p>2-0: " . number_format($prob_2_0 * 100, 2) . "%</p>";
    echo "<p>2-1: " . number_format($prob_2_1 * 100, 2) . "%</p>";
    echo "<p>1-2: " . number_format($prob_1_2 * 100, 2) . "%</p>";
    echo "<p>0-2: " . number_format($prob_0_2 * 100, 2) . "%</p>";
}
