<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lista produtos</title>
</head>
<body>
    <h1>listagem de produtos</h1>
    <?php
    $conexao = mysqli_connect("localhost","root","","lanchonete");
    $sql_pesquisar = "select * from tbprodutos";
    $resultado = mysqli_query($conexao,$sql_pesquisar);
    while($linha = mysqli_fetch_assoc($resultado)){
    echo "nome do produto: {$linha['produto']}";
    echo "<br>";
    echo "preço: {$linha['preco']}";
    echo "<br>";
    echo "ingredientes: {$linha['ingredientes']}";
    echo "<br>";
    echo "---//---";
    }
    mysqli_close($conexao);
    ?>
    
</body>
</html>