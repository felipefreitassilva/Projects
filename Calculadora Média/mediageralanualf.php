<!doctype html>
<html lang="pt-br">

    <head>
        <title>Média Geral Anual</title>
        <?php include 'metas.php'; ?>
        <link href="css/styleg1.css" rel="stylesheet" type="text/css">
        <link rel="shortcut icon" href="favicon_io/favicon.ico" type="image/x-icon">
        <style>body{overflow-y: scroll}</style>
    </head>

    <body>
        
    <div class="text-wrapper">

    <div class="flexh1">
        <h1>Média Geral Anual</h1>
    </div><!--flexh1-->

    <?php

    //Variaveis trimestre/materia
        $T1Po = @$_GET['T1Po'];
        $T2Po = @$_GET['T2Po'];
        $T3Po = @$_GET['T3Po'];

        $T1Pr = @$_GET['T1Pr'];
        $T2Pr = @$_GET['T2Pr'];
        $T3Pr = @$_GET['T3Pr'];
        
        $T1Li = @$_GET['T1Li'];
        $T2Li = @$_GET['T2Li'];
        $T3Li = @$_GET['T3Li'];
        
        $T1Ar = @$_GET['T1Ar'];
        $T2Ar = @$_GET['T2Ar'];
        $T3Ar = @$_GET['T3Ar'];
        
        $T1Ef = @$_GET['T1Ef'];
        $T2Ef = @$_GET['T2Ef'];
        $T3Ef = @$_GET['T3Ef'];
        
        $T1In = @$_GET['T1In'];
        $T2In = @$_GET['T2In'];
        $T3In = @$_GET['T3In'];
        
        $T1AE = @$_GET['T1AE'];
        $T2AE = @$_GET['T2AE'];
        $T3AE = @$_GET['T3AE'];
        
        $T1Hi = @$_GET['T1Hi'];
        $T2Hi = @$_GET['T2Hi'];
        $T3Hi = @$_GET['T3Hi'];
        
        $T1Ge = @$_GET['T1Ge'];
        $T2Ge = @$_GET['T2Ge'];
        $T3Ge = @$_GET['T3Ge'];
        
        $T1Fil = @$_GET['T1Fil'];
        $T2Fil = @$_GET['T2Fil'];
        $T3Fil = @$_GET['T3Fil'];
        
        $T1So = @$_GET['T1So'];
        $T2So = @$_GET['T2So'];
        $T3So = @$_GET['T3So'];
        
        $T1At = @$_GET['T1At'];
        $T2At = @$_GET['T2At'];
        $T3At = @$_GET['T3At'];
        
        $T1Fis = @$_GET['T1Fis'];
        $T2Fis = @$_GET['T2Fis'];
        $T3Fis = @$_GET['T3Fis'];
        
        $T1Qu = @$_GET['T1Qu'];
        $T2Qu = @$_GET['T2Qu'];
        $T3Qu = @$_GET['T3Qu'];
        
        $T1Bi = @$_GET['T1Bi'];
        $T2Bi = @$_GET['T2Bi'];
        $T3Bi = @$_GET['T3Bi'];
        
        $T1Ma = @$_GET['T1Ma'];
        $T2Ma = @$_GET['T2Ma'];
        $T3Ma = @$_GET['T3Ma'];

    //Média Geral de cada matéria
        $MGAPo = ((3*($T3Po) + 2*($T2Po) + ($T1Po)) / 6);
        $MGAPr = ((3*($T3Pr) + 2*($T2Pr) + ($T1Pr)) / 6);
        $MGALi = ((3*($T3Li) + 2*($T2Li) + ($T1Li)) / 6);
        $MGAAr = ((3*($T3Ar) + 2*($T2Ar) + ($T1Ar)) / 6);
        $MGAEf = ((3*($T3Ef) + 2*($T2Ef) + ($T1Ef)) / 6);
        $MGAIn = ((3*($T3In) + 2*($T2In) + ($T1In)) / 6);
        $MGAAE = ((3*($T3AE) + 2*($T2AE) + ($T1AE)) / 6);
        $MGAHi = ((3*($T3Hi) + 2*($T2Hi) + ($T1Hi)) / 6);
        $MGAGe = ((3*($T3Ge) + 2*($T2Ge) + ($T1Ge)) / 6);
        $MGAFil = ((3*($T3Fil) + 2*($T2Fil) + ($T1Fil)) / 6);
        $MGASo = ((3*($T3So) + 2*($T2So) + ($T1So)) / 6);
        $MGAAt = ((3*($T3At) + 2*($T2At) + ($T1At)) / 6);
        $MGAFis = ((3*($T3Fis) + 2*($T2Fis) + ($T1Fis)) / 6);
        $MGAQu = ((3*($T3Qu) + 2*($T2Qu) + ($T1Qu)) / 6);
        $MGABi = ((3*($T3Bi) + 2*($T2Bi) + ($T1Bi)) / 6);
        $MGAMa = ((3*($T3Ma) + 2*($T2Ma) + ($T1Ma)) / 6);
          
    //Média Geral Anual
        $MGA = (($MGAPo) + ($MGAPr) + ($MGALi) + ($MGAAr) + ($MGAEf) + ($MGAIn) + ($MGAAE) + ($MGAHi) + ($MGAGe) + ($MGAFil) + ($MGASo) + ($MGAAt) + ($MGAFis) + ($MGAQu) + ($MGABi) + ($MGAMa)) / 16;

    if($MGA > 10){
        echo '<form action="mediageralanual.php"><button>Voltar</button></form>';
        die("<die>Por favor, não digite valores maiores do que 10.</die>");
    }

    echo '<br>';
    echo("<p class='smgae'>Sua média geral anual é:");
    echo ("<p class='smga'>");
    echo (round($MGA,3));
    echo '</p>';

    echo '<div class="smf">';
    echo '<div class="smaf">';
    echo '<p>Suas médias foram:</p>';
        echo '<p>';
        echo '<br>Português: ';
            echo (round($MGAPo,2));
            echo '<br>';
        echo 'Produção Textual: ';
            echo (round($MGAPr,2));
            echo '<br>';
        echo 'Literatura: ';
            echo (round($MGALi,2));
            echo '<br>';
        echo 'Artes: ';
            echo (round($MGAAr,2));
            echo '<br>';
        echo 'Educação Física: ';
            echo (round($MGAEf,2));
            echo '<br>';
        echo 'Inglês: ';
            echo (round($MGAIn,2));
            echo '<br>';
        echo 'Alemão / Espanhol: ';
            echo (round($MGAAE,2));
            echo '<br>';
        echo 'História: ';
            echo (round($MGAHi,2));
            echo '<br>';
        echo 'Geografia: ';
            echo (round($MGAGe,2));
            echo '<br>';
        echo 'Filosofia: ';
            echo (round($MGAFil,2));
            echo '<br>';
        echo 'Sociologia: ';
            echo (round($MGASo,2));
            echo '<br>';
        echo 'Atualidades: ';
            echo (round($MGAAt,2));
            echo '<br>';
        echo 'Física: ';
            echo (round($MGAFis,2));
            echo '<br>';
        echo 'Química: ';
            echo (round($MGAQu,2));
            echo '<br>';
        echo 'Biologia: ';
            echo (round($MGABi,2));
            echo '<br>';
        echo 'Matemática: ';
                echo (round($MGAMa,2));
                echo '<br>';
        echo '</p>';
        /*echo '<img src="img/boasfestas.jpg" alt="Boas Festas!>';*/
    echo '</div><!--smaf-->';
    echo '<div class="img"><h4>Boas Festas!</h4></div>';
    echo '</div><!--smf-->';

    echo '<br>';
    echo '<form action="mediageralanual.php"><button>Voltar</button></form>';

    ?>

    </div><!--text-wrapper-->

    <?php include 'footer.html' ?>

</body>

</html>