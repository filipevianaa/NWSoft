<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>NW Vendas</title>
</head>

<body>
<script src="js/helpers.js"></script>

<header>
    <nav class="navbar bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="marca-final-02.png" alt="Bootstrap" width="150" height="40">
            </a>
        </div>
    </nav>    
</header>

<ul class="nav nav-tabs col-10 m-auto">
    <li class="nav-item">
        <a class="nav-link" aria-current="page" href="index.php">Cadastrar Venda</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="consultar.php">Consultar Vendas</a>
    </li>
</ul>

<br>

<?php
include_once("conexao.php");
// include_once("editar.php");

$numero_nota = filter_input(INPUT_GET, "numero_nota", FILTER_SANITIZE_NUMBER_INT);


$tipo_pagamento_novo = $_POST["tipo_pagamento"];
$numero_nota_novo = $_POST["nota"];
$dia_novo = $_POST["dia"];
$mes_novo = $_POST["mes"];
$ano_novo = $_POST["ano"];
$observacao_novo = $_POST["observacao"];
$data_novo = $dia_novo."/".$mes_novo."/".$ano_novo;

$sql_vendas_editar = "update vendas set numero_nota='$numero_nota_novo', tipo_pagamento='$tipo_pagamento_novo', data='$data_novo',observacao='$observacao_novo' where numero_nota='$numero_nota'";

$editar_venda = mysqli_query($conexao,$sql_vendas_editar);

$controle = 1;
while (isset($_POST["prod".$controle]) && $_POST["prod".$controle] != NULL) {
    $id = $_POST["id".$controle];
    $produto_novo = $_POST["prod".$controle];
    $quantidade_novo = $_POST["qtd".$controle];
    $preco_unitario_novo = $_POST["preco".$controle];
    $controle++;

    $sql_produtos_vendidos_editar = "update produtos_vendidos set nome='$produto_novo', quantidade='$quantidade_novo', numero_nota='$numero_nota_novo', preco_unitario='$preco_unitario_novo' where numero_nota='$numero_nota' and id='$id'";

    $editar_produto = mysqli_query($conexao,$sql_produtos_vendidos_editar);

}

$linhasAfetadas = mysqli_affected_rows($conexao);

if ($linhasAfetadas > 0){
    echo '
    <div class="alert alert-success col-10 m-auto" role="alert">
        Registro editado com sucesso!
    </div>';
} else {
    echo '
    <div class="alert alert-danger col-10 m-auto" role="alert">
        Erro ao editar registro
    </div>';
}

mysqli_close($conexao);
?>

</body>
</html>