<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lista pedidos</title>
</head>
<body>
    <h1>listagem de pedidos</h1>
    <?php
    $conexao = mysqli_connect("localhost","root","","lanchonete");
    $sql_pesquisar = "select * from tbpedidos";
    $resultados = mysqli_query($conexao,$sql_pesquisar);
    while($lista = mysqli_fetch_assoc($resultados)){
    echo "nome do produto: {$linha['produtos']}";
    echo "<br>"
    echo "total: {$linha['total']}";
    echo "<br>";
    echo "observações: {$linha['observacoes']}";
    echo "<br>"
    echo "informações do cliente: {$linha['informacoesClientes]}";
    echo "<br>"
    echo "entrega ou retirada: {$linha['entregaRetirada]};
    echo "---//---";
    }
    
</body>
</html>