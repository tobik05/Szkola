<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie Tobiasz Bielawski</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>MOTYW</h1>
        <form action="index.php" method="POST">
            <label><input type="radio" name="wybor" value="#d90429">Czerwony</label>
            <label><input type="radio" name="wybor" value="#8ac926">Zielony</label>
            <label><input type="radio" name="wybor" value="#2d3250">Niebieski</label>
            <button type="submit" name="submit">WYBIERZ</button>
        </form>
        <section>
            <p>ŚWIEBODZIN</p>
        </section>
    </main>
    <?php 
    if(isset($_POST['submit'])){
        if(isset($_POST['wybor'])){
            $wybor=$_POST['wybor'];
            setcookie("wybor",$wybor,time()+30,"/","localhost");
        }else if(isset($_COOKIE["wybor"])) {
            $wybor=$_COOKIE["wybor"];
        }
        if(isset($wybor)){
            echo "<style> p{color:".$wybor.";}</style>";
        }
    }
    ?>
</body>
</html>