<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $con=mysqli_connect("localhost","root","","users");
    session_start();
    if(isset($_SESSION['error'])){
        echo $_SESSION['error'];
    }
    if(isset($_SESSION['zalogowany'])){
        echo "<h1 class='succes'>Jesteś zalogowany - masz dostęp</h1>";
    }else{
        $_SESSION['error']="<h1 class='error'>Nie masz dostępu do tej strony - zaloguj się</h1>";
        exit( header("Location: login.php"));
    }
    ?>
    <a href="index.php" class="button small-button">Wróć</a>
</body>
</html>