<!doctype html>
<html>

<head>
    <title>Média 8</title>
    <?php include 'metas.php'; ?>
    <link href="css/styles.css" rel="stylesheet">
    <link rel="shortcut icon" href="favicon_io_8/favicon.ico" type="image/x-icon">
</head>

<body>

    <div class="form-wrapper">
        <form action="serveroito.php">
            <h1>Média 8</h1>
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