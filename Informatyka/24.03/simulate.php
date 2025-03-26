<?php
function elo_probability($elo_a, $elo_b) {
    return 1 / (1 + pow(10, ($elo_b - $elo_a) / 400));
}

function adjust_probability($base_prob, $form, $h2h, $fatigue, $serve, $return) {
    $form_factor = 1 + ($form - 0.5) * 0.1;
    $h2h_factor = 1 + ($h2h * 0.05);
    $fatigue_factor = 1 - ($fatigue * 0.02);
    $serve_factor = 1 + (($serve - 50) * 0.02);
    $return_factor = 1 + (($return - 50) * 0.02);

    return max(0, min(1, $base_prob * $form_factor * $h2h_factor * $fatigue_factor * $serve_factor * $return_factor));
}

function simulate_set($prob_a) {
    $games_a = 0;
    $games_b = 0;
    
    while (true) {
        if (rand(0, 100) / 100.0 < $prob_a) {
            $games_a++;
        } else {
            $games_b++;
        }

        if ($games_a >= 6 && ($games_a - $games_b) >= 2) return [$games_a, $games_b];
        if ($games_b >= 6 && ($games_b - $games_a) >= 2) return [$games_a, $games_b];
    }
}

function simulate_match($prob_a, $best_of = 3) {
    $sets_needed = ceil($best_of / 2);
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

        if ($games_a > $games_b) $sets_a++;
        else $sets_b++;
    }

    return [$sets_a, $sets_b, $set_results, $total_games_a + $total_games_b];
}

$elo_a = $_POST['elo_a'];
$elo_surface_a = $_POST['elo_surface_a'];
$form_a = $_POST['form_a'];
$h2h_a = $_POST['h2h_a'];
$fatigue_a = $_POST['fatigue_a'];
$serve_a = $_POST['serve_a'];
$return_a = $_POST['return_a'];

$elo_b = $_POST['elo_b'];
$elo_surface_b = $_POST['elo_surface_b'];
$form_b = $_POST['form_b'];
$h2h_b = $_POST['h2h_b'];
$fatigue_b = $_POST['fatigue_b'];
$serve_b = $_POST['serve_b'];
$return_b = $_POST['return_b'];

$prob_a = elo_probability($elo_a + $elo_surface_a, $elo_b + $elo_surface_b);
$prob_a = adjust_probability($prob_a, $form_a, $h2h_a, $fatigue_a, $serve_a, $return_a);
$prob_b = 1 - $prob_a;

list($sets_a, $sets_b, $set_results, $total_games) = simulate_match($prob_a);

echo "<h2>Wynik meczu</h2>";
echo "Zawodnik A $sets_a - $sets_b Zawodnik B <br>";
foreach ($set_results as $i => $set) {
    echo "Set " . ($i + 1) . ": $set<br>";
}
echo "Łączna liczba gemów: $total_games<br>";
echo "Prawdopodobieństwo zwycięstwa A: " . round($prob_a * 100, 2) . "%<br>";
echo "Prawdopodobieństwo zwycięstwa B: " . round($prob_b * 100, 2) . "%<br>";
?>