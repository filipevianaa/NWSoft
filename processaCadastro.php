<?php

include_once("conexao.php");

$tipo_pagamento = $_POST["tipo_pagamento"];
$nota = $_POST["nota"];
$dia = $_POST["dia"];
$mes = $_POST["mes"];
$ano = $_POST["ano"];
$observacao = $_POST["observacao"];
$data = $dia."/".$mes."/".$ano;

$sql_vendas = "insert into vendas (numero_nota, tipo_pagamento, data, observacao) values ('$nota', '$tipo_pagamento', '$data', '$observacao')";

$salvar_venda = mysqli_query($conexao,$sql_vendas);

$controle = 1;
while (isset($_POST["prod".$controle]) && $_POST["prod".$controle] != NULL) {
    $produto = $_POST["prod".$controle];
    $quantidade = $_POST["qtd".$controle];
    $preco_unitario = $_POST["preco".$controle];
    $controle++;

    $sql_produtos_vendidos = "insert into produtos_vendidos (nome, quantidade, preco_unitario, numero_nota) values ('$produto', '$quantidade','$preco_unitario', '$nota')";

    $salvar_produto = mysqli_query($conexao,$sql_produtos_vendidos);
}

?>

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
    <a class="nav-link active" aria-current="page" href="index.php">Cadastrar Venda</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="consultar.php">Consultar Vendas</a>
  </li>
</ul>

<?php

$linhasAfetadas = mysqli_affected_rows($conexao);

if ($linhasAfetadas > 0){
  echo '
  <div class="alert alert-success col-10 m-auto" role="alert">
    Venda registrada com sucesso
  </div>';
} else {
  echo '<div class="alert alert-danger col-10 m-auto" role="alert">
    Erro registrar venda
  </div>';
}

mysqli_close($conexao);
?>

<form method="post" class="row g-3 col-10 m-auto" action="index.php">
  
  <div class="col-12 mx-auto">
    <button type="submit" class="btn btn-primary">Cadastrar nova venda</button>
  </div>

</form>

<script src="js/helpers.js"></script>
    
</body>
</html>