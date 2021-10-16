<html>
    <body>

        Olá, <?php echo $_POST["nome"]; ?><br>
        Seu telefone: <?php echo $_POST["telefone"]; ?><br>

        Seu pedido:<br>
            Produto: <?php 
            $produtos = echo $_POST["produtos"]; 
            ?><br>
            Quantidade: <?php echo $_POST["quantidade"]; ?><br>
            Observações: <?php echo $_POST["observacao"]; ?><br>

    </body>
</html>