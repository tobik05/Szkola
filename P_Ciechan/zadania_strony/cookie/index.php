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
        <h2>KOLOR</h2>
        <form action="index.php" method="POST">
            <label><input type="radio" name="wybor" value="#d90429">Czerwony</label>
            <label><input type="radio" name="wybor" value="#8ac926">Zielony</label>
            <label><input type="radio" name="wybor" value="#f9b17a">Złoty</label>
            <button type="submit" name="submit">WYBIERZ</button>
        </form>
        <section>
            <h1>ŚWIEBODZIN</h1>
        </section>
    </main>
    <?php 
    if(isset($_COOKIE["wybor"])) {
        $wybor=$_COOKIE["wybor"];
    }
    if(isset($_POST['submit'])){
        $wybor=$_POST['wybor'];
        setcookie("wybor",$wybor,time()+30,"/","localhost");
    }
    if(isset($wybor)){
        echo "<style> h1{color:".$wybor.";}</style>";
    }
    ?>
</body>
</html>