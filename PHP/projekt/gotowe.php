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
    <body>
        <main>
        <?php 
            if(isset($_POST["p"])){
                $plec = $_POST["p"];
            }
            if(isset($_POST["o1"])){
                $o1 = $_POST["o1"];
            }
            if(isset($_POST["o2"])){
                $o2 = $_POST["o2"];
            }
            if(isset($_POST["o3"])){
                $o3 = $_POST["o3"];
            }
            if(isset($_POST["o4"])){
                $o4 = $_POST["o4"];
            }
            if(isset($_POST["o5"])){
                $o5 = $_POST["o5"];
            }
            if(isset($_POST["o6"])){
                $o6 = $_POST["o6"];
            }
            $suma = ($o1 + $o2 + $o3 + $o4 + $o5 + $o6);
            echo $plec;        ?>
        </main>
    </body>
</html