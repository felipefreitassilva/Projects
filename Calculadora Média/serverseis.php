<!doctype html>
<html lang="pt-br">

    <head>
        <title>Média 6</title>
        <?php include 'metas.php'; ?>
        <link href="css/styless.css" rel="stylesheet" type="text/css">
        <link rel="shortcut icon" href="favicon_io_6/favicon.ico" type="image/x-icon">
    </head>

    <body>
        
    <div class="text-wrapper">

    <div class="flexh1">
        <h1>Média 6</h1>
    </div><!--flexh1-->

    <?php

    $T1 = @$_GET['T1'];
    $T2 = @$_GET['T2'];
    $T3 = (36 - 2*($T2) - ($T1)) / 3;

    echo("<p>Nota do 1 tri: $T1</p>");
    echo'<br>';
    
    echo("<p>Nota do 2 tri: $T2</p>");
    echo '<br />';

    if(($T1 > 10) || ($T2 > 10)){
        echo '<form action="mediaseis.php"><button>Voltar</button></form>';
        die("<die>Por favor, digite um valor menor ou igual a 10 nos campos do 1º e 2º tri</die>");
    }

    echo '<br>';
    echo("<p>A nota do 3 tri precisa ser:");
    echo '<p>';
    echo (round($T3,2));
    echo '</p>';

    if (($T1 == 0) && ($T2 == 0)){
        echo "<p>Não fez nada o ano <seis>inteiro</seis> e vai dizer que quer passar?<br>Não vai rolar.</p>";
        }else if (($T3 == $T1) && ($T3 == $T2)){
            echo ("<p>Quem faz duas, faz três!</p>");
            }else if (($T3 == $T1) || ($T3 == $T2)){
                echo ("<p>Quem consegue uma, consegue duas!</p>");
                }else if ($T3 > 10){
                    echo ("<p>É meu amigo, não vai rolar.</p>");
                    }else if (($T3 <= 10) && ($T3 > 9)){
                        echo "<p>Sempre tem o ano que vem.</p>";
                        }else if (($T3 <= 9) && ($T3 >8)){
                            echo "<p>Boa sorte! (vai precisar).</p>";
                            }else if (($T3 <= 8) && ($T3 >7)){
                                echo "<p>Tava boa a soneca? Acho bom começar os estudos.</p>";
                                }else if (($T3 <= 7) && ($T3 >6)){
                                    echo "<p>Ta tranquilo, só lembrar de entregar os trabalhos...</p>";
                                    }else if (($T3 <= 6) && ($T3 >= 5.9)){
                                        echo "<p>Vai passar ali ali, ehin?</p>";
                                        }else if (($T3 < 5.9) && ($T3 > 2)){
                                            echo "<p>Só passar.</p>";
                                            }else if ($T3 = 2){
                                                echo ("<p>Meus parabéns, cola muito.</p>");
                                                }

    echo '<br>';
    echo '<form action="mediaseis.php"><button>Voltar</button></form>';

    ?>

    </div><!--text-wrapper-->

    <?php include 'footer.html' ?>

</body>

</html>