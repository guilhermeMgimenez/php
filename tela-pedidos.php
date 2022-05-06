<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro de pedidos</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1>CADASTRO DE PEDIDOS</h1>
    <form action="cadastra-pedidos.php" method="post">
    produto:<input name="produto" id="produto"><br>
    total:<input name="total" id="total"><br>
    observações<br>
    <textarea name="observacoes" id="observacoes"></textarea><br>
    entrega ou retirada? <input name="envio" id="envio"><br>
    informações do cliente<br>
    <textarea name="info" id="info"></textarea>
    <button type="submit">salvar</button>
    </form>

</body>
</html>