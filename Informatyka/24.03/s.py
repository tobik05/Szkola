import random

def elo_probability(elo_a, elo_b):
    return 1 / (1 + 10 ** ((elo_b - elo_a) / 400))

def simulate_game(prob_a):
    points_a, points_b = 0, 0
    while True:
        if random.random() < prob_a:
            points_a += 1
        else:
            points_b += 1
        
        if points_a >= 4 and points_a - points_b >= 2:
            return "A"
        elif points_b >= 4 and points_b - points_a >= 2:
            return "B"

def simulate_set(prob_a):
    games_a, games_b = 0, 0
    while True:
        if simulate_game(prob_a) == "A":
            games_a += 1
        else:
            games_b += 1
        
        if games_a >= 6 and games_a - games_b >= 2:
            return games_a, games_b
        elif games_b >= 6 and games_b - games_a >= 2:
            return games_a, games_b

def simulate_match(elo_a, elo_b, best_of=3):
    prob_a = elo_probability(elo_a, elo_b)
    sets_needed = (best_of // 2) + 1
    sets_a, sets_b = 0, 0
    set_results = []
    total_games_a, total_games_b = 0, 0
    
    while sets_a < sets_needed and sets_b < sets_needed:
        games_a, games_b = simulate_set(prob_a)
        set_results.append(f"{games_a}-{games_b}")
        total_games_a += games_a
        total_games_b += games_b
        
        if games_a > games_b:
            sets_a += 1
        else:
            sets_b += 1
    
    handicap = total_games_a - total_games_b
    
    return set_results, handicap, total_games_a, total_games_b, prob_a

if __name__ == "__main__":
    player_a = input("Podaj nazwisko zawodnika A: ")
    elo_a = int(input(f"Podaj ranking ELO dla {player_a}: "))
    player_b = input("Podaj nazwisko zawodnika B: ")
    elo_b = int(input(f"Podaj ranking ELO dla {player_b}: "))
    
    sets, handicap, total_games_a, total_games_b, prob_a = simulate_match(elo_a, elo_b)
    
    prob_b = 1 - prob_a
    prob_2_0 = prob_a ** 2
    prob_2_1 = 2 * prob_a * prob_b * prob_a
    prob_1_2 = 2 * prob_b * prob_a * prob_b
    prob_0_2 = prob_b ** 2
    prob_win_a = prob_2_0 + prob_2_1
    prob_win_b = prob_0_2 + prob_1_2
    
    print(f"\nMecz: {player_a} {prob_win_a:.2%} vs {player_b} {prob_win_b:.2%}")
    print("2-0")
    for i, result in enumerate(sets, 1):
        print(f"Set {i}: {result}")
    print(f"Liczba gemów w meczu: {total_games_a + total_games_b}")
    print("Prawdopodobieństwo:")
    print(f"2-0: {prob_2_0:.2%}")
    print(f"2-1: {prob_2_1:.2%}")
    print(f"1-2: {prob_1_2:.2%}")
    print(f"0-2: {prob_0_2:.2%}")