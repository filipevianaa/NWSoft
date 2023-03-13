<?php

include_once("conexao.php");

$filtro = isset($_GET['filtro'])?$_GET['filtro']:"";

if (isset($_GET['filtro'])){
  $filtrarPor = $_GET['filtrar-por'];
  $sql_vendas = "select * from vendas where $filtrarPor like '%$filtro%'";
} else{
  $sql_vendas = "select * from vendas";
}

$sql_produtos = "select * from produtos_vendidos";

$consulta_vendas = mysqli_query($conexao,$sql_vendas);
$consulta_produtos = mysqli_query($conexao,$sql_produtos);

$registros = mysqli_num_rows($consulta_vendas);


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
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
    <a class="nav-link" aria-current="page" href="index.php">Cadastrar Venda</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="consultar.php">Consultar Vendas</a>
  </li>
</ul>

<form method="get" class="row g-3 col-10 m-auto" action="">
  
<div class="col-md-2">
    <label for="inputFiltro" class="form-label">Buscar por</label>
    <select class="form-select" name="filtrar-por" aria-label="Default select example" id="inputFiltro" required>
      <option value="data">Data</option>
      <option value="numero_nota">Número da nota</option>
    </select>
</div>

<div class="col-md-2">
  <label for="filtro" class="form-label">Busca</label>
  <input type="text" name="filtro" class="form-control" id="filtro" placeholder="">
</div>

<div class="col-12">
  <button type="submit" class="btn btn-primary">Buscar</button>
</div>
</form>

<?php

while($exibirVendas = mysqli_fetch_array($consulta_vendas))
{
  $numero_nota = $exibirVendas[0];
  $tipo_pagamento = $exibirVendas[1];
  $data = $exibirVendas[2];
  $observacao = $exibirVendas[3];
  $listaProdutos = '';
  mysqli_data_seek($consulta_produtos, 0);
  $preco_total = 0;

  while ($exibirProdutos = mysqli_fetch_array($consulta_produtos))
  {
    $id = $exibirProdutos[0];
    $produto = $exibirProdutos[1];
    $quantidade = floatval($exibirProdutos[2]);
    $preco = floatval($exibirProdutos[3]);
    $numeroNotaProduto = $exibirProdutos[4];

    if ($numeroNotaProduto == $numero_nota)
    {
    $preco_total = $preco_total + ($quantidade * $preco);
    $listaProdutos = $listaProdutos.'
    <tr>
      <th scope="row">'.$id.'</th>
      <td>'.$produto.'</td>
      <td>'.$quantidade.'</td>
      <td> R$'.number_format($preco,2,",",".").'</td>
    </tr>';
    }

  }
  

  print 
    '
    <br>
    <div class="card col-10 m-auto">
      <div class="card-header position-relative">
        Venda número: <strong>'.$numero_nota.'</strong> ('.$data.') - Preço total da venda: R$'.number_format($preco_total,2,",",".").'
        <a class="btn btn-info" href="editar.php?numero_nota='.$numero_nota.'; ?>">Editar</a>
        <button type="button" name="excluir" class="btn btn-danger " onclick="excluirVenda('.$numero_nota.')">Excluir</button>
      </div>
      <div class="card-body">
        <p>Tipo de pagamento: '.$tipo_pagamento.' </p>
        <p>Observação: '.$observacao.' </p>
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Produto</th>
              <th scope="col">Quantidade</th>
              <th scope="col">Preço unitário</th>
            </tr>
          </thead>
          <tbody>
            '.$listaProdutos.'
            </tbody>
        </table>
      </div>
    </div>';
}
mysqli_close($conexao);
?>    
<script src="js/helpers.js"></script>   
</body>
</html>