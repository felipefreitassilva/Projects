<!doctype html>
<html>

<head>
    <title>Média Geral</title>
    <?php include 'metas.php'; ?>
    <link href="css/styleg0.css" rel="stylesheet">
    <link rel="shortcut icon" href="favicon_io/favicon.ico" type="image/x-icon">
</head>

<body>
    
    <div class="form-wrapper">

        <form action="mediageralf.php">
            <h1>Média Geral</h1>

            <div class="flex">
                <label for="T1">Nota do 1º tri: </label>
                <input type="text" name="T1" />
            </div><!--flex-->
            <br>
            <div class="flex">
                <label for="T2">Nota do 2º tri: </label>
                <input type="text" name="T2" />
            </div><!--flex-->
            <br>
            <div class="flex">
                <label for="T3">Nota do 3º tri: </label>
                <input type="text" name="T3" />
            </div><!--flex-->
            <br>
            <input type="submit" name="acao" value="Enviar" />
            <p><asc>*</asc><atc>Atenção!</atc> Se a nota digitada não for um número natural, utilize "." (ponto) ao invés de "," (vírgula).</p>
        </form>

        <div class="form-wrapper">
            <form action="index.html">
                <button>Voltar</button>
            </form>
        </div><!--form-wrapper-->

    </div><!--form-wrapper-->
    
    <?php include 'footer.html' ?>

</body>

</html>