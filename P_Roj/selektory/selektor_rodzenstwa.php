<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selektory</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="images/logo.png">
    <style>
        *{
            margin: 0;
            color: white;
            font-family: 'Rethink Sans', sans-serif;
            font-weight: 400;
        }
        body{
            text-align: center;
            background-color: #2d3250;
        }
        button{
            background-color: #f9b17a;
            color: black;
            border-radius: 2px;
            padding:10px;
            outline: none;
            border: none;
        }
        p~p{
            font-size: 40px;
        }
    </style>
</head>
<body>
    <button>PRZYCISK 1</button>
    <p>To jest paragraf</p>
    <div class="div">
        <button>przycisk w divie</button>
        <p>To jest paragraf w divie</p>
        <p>To jest paragraf, a w nim przycsik
            <button>PRZYCSIK w paragrafie</button>
        </p>
    </div>
</body>
</html>