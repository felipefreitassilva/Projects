<!doctype html>
<html lang="pt-br">

    <head>
        <title>Média Geral</title>
        <?php include 'metas.php'; ?>
        <link href="css/styleg1.css" rel="stylesheet" type="text/css">
        <link rel="shortcut icon" href="favicon_io/favicon.ico" type="image/x-icon">
    </head>

    <body>
        
    <div class="text-wrapper">

    <div class="flexh1">
        <h1>Média Geral</h1>
    </div><!--flexh1-->

    <?php

    $T1 = @$_GET['T1'];
    $T2 = @$_GET['T2'];
    $T3 = @$_GET['T3'];
    $MG = (3*($T3) + 2*($T2) + ($T1)) / 6;

    echo("<p>Nota do 1 tri: $T1</p>");
    echo'<br>';
    
    echo("<p>Nota do 2 tri: $T2</p>");
    echo '<br />';

    echo("<p>Nota do 3 tri: $T3</p>");
    echo '<br />';

    if(($T1 > 10) || ($T2 > 10) || ($T3 > 10)){
        echo '<form action="mediageral.php"><button>Voltar</button></form><br>';
        die("<die>Por favor, digite um valor menor ou igual a 10 nos campos do 1º e 2º tri</die>");
    }

    echo '<br>';
    echo("<p>Sua média geral é:");
    echo '<p>';
    echo (round($MG,2));
    echo '</p>';

    echo '<br>';
    echo '<form action="mediageral.php"><button>Voltar</button></form>';

    ?>

    </div><!--text-wrapper-->

    <?php include 'footer.html' ?>

</body>

</html>