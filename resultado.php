<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/resultado.css">
    <title>Quiz Entretenimento</title>

</head>
<body>
    <form id="form" method="GET" action="index.html">
    <section>
    <?php
        $p1 = $_GET['p1'];
        $p2 = $_GET['p2'];
        $p3 = $_GET['p3'];
        $p4 = $_GET['p4'];
        $p5 = $_GET['p5'];
        $p6 = $_GET['p6'];
        $p7 = $_GET['p7'];
        $p8 = $_GET['p8'];
        $p9 = $_GET['p9'];
        $p10 = $_GET['p10'];

        $acertos = $p1 + $p2 + $p3 + $p4 + $p5 + $p6 + $p7 + $p8 + $p9 + $p10;
        $erros = 10 - $acertos;
        
        if ($acertos <=4) {
            echo " <p> Zuado!! Você acertou, {$acertos} </p><br>";
            echo "<img src= './gifs/1.gif' width='900'";
        }
        else if ($acertos <= 6){
            echo " <p> Boa!! Você acertou, {$acertos} </p>";
            echo "<img src= './gifs/2.gif' width='900'";
        }
        else if ($acertos <= 8){
            echo " <p> Parabens!! Você acertou, {$acertos} </p>";
            echo "<img src= './gifs/3.gif' width='900'";
        }
        else {
            echo "<p> Top!! Você acertou, {$acertos} </p>";
            echo "<img src= './gifs/4.gif' width='900'";
        }
    ?> 
    </section>
    
    <button class="btn">
        <span>REINICIAR</span>
    </button>
</body>
</html>