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
<div class="card text-center col-10 m-auto">
  <div class="card-header">
    Editar registro
</div>

    
<?php

include_once("conexao.php");


$numero_nota = filter_input(INPUT_GET, "numero_nota", FILTER_SANITIZE_NUMBER_INT);



$sql_vendas = "select * from vendas where numero_nota = '$numero_nota'";
$sql_produtos = "select * from produtos_vendidos where numero_nota = '$numero_nota'";


$consulta_vendas = mysqli_query($conexao,$sql_vendas);
$consulta_produtos = mysqli_query($conexao,$sql_produtos);



$exibirVendas = mysqli_fetch_array($consulta_vendas);


echo '<form method="post" class="row g-3 col-12 m-auto" action="processaEditar.php?numero_nota='.$numero_nota.'; ?>">';


echo '
<div class="col-md-6">
    <label for="tipo_pagamento" class="form-label">Tipo de pagamento</label>
    <select name="tipo_pagamento" class="form-select" aria-label="Default select example" required>
        <option value="À vista" '.(($exibirVendas[1]== "À vista")? "selected":"").'>À vista</option>
        <option value="Parcelado" '.(($exibirVendas[1]== "Parcelado")? "selected":"").'>Parcelado</option>
    </select>
</div>';

echo '
<div class="col-md-6">
    <label for="InputNota" class="form-label">Número da nota</label>
    <input type="number" name="nota" class="form-control" id="InputNota" placeholder="" required value="'.$exibirVendas[0].'">
</div>';

echo '
<div class="col-md-2">
    <label for="inputDay" class="form-label">Dia</label>
    <select class="form-select" name="dia" aria-label="Default select example" id="InputDay" required>
        <option value="01" '.((substr($exibirVendas[2],0,2) == "01")? "selected":"").'>01</option>
        <option value="02" '.((substr($exibirVendas[2],0,2)== "02")? "selected":"").'>02</option>
        <option value="03" '.((substr($exibirVendas[2],0,2)== "03")? "selected":"").'>03</option>
        <option value="04" '.((substr($exibirVendas[2],0,2)== "04")? "selected":"").'>04</option>
        <option value="05" '.((substr($exibirVendas[2],0,2)== "05")? "selected":"").'>05</option>
        <option value="06" '.((substr($exibirVendas[2],0,2)== "06")? "selected":"").'>06</option>
        <option value="07" '.((substr($exibirVendas[2],0,2)== "07")? "selected":"").'>07</option>
        <option value="08" '.((substr($exibirVendas[2],0,2)== "08")? "selected":"").'>08</option>
        <option value="09" '.((substr($exibirVendas[2],0,2)== "09")? "selected":"").'>09</option>
        <option value="10" '.((substr($exibirVendas[2],0,2)== "10")? "selected":"").'>10</option>
        <option value="11" '.((substr($exibirVendas[2],0,2)== "11")? "selected":"").'>11</option>
        <option value="12" '.((substr($exibirVendas[2],0,2)== "12")? "selected":"").'>12</option>
        <option value="13" '.((substr($exibirVendas[2],0,2)== "13")? "selected":"").'>13</option>
        <option value="14" '.((substr($exibirVendas[2],0,2)== "14")? "selected":"").'>14</option>
        <option value="15" '.((substr($exibirVendas[2],0,2)== "15")? "selected":"").'>15</option>
        <option value="16" '.((substr($exibirVendas[2],0,2)== "16")? "selected":"").'>16</option>
        <option value="17" '.((substr($exibirVendas[2],0,2)== "17")? "selected":"").'>17</option>
        <option value="18" '.((substr($exibirVendas[2],0,2)== "18")? "selected":"").'>18</option>
        <option value="19" '.((substr($exibirVendas[2],0,2)== "19")? "selected":"").'>19</option>
        <option value="20" '.((substr($exibirVendas[2],0,2)== "20")? "selected":"").'>20</option>
        <option value="21" '.((substr($exibirVendas[2],0,2)== "21")? "selected":"").'>21</option>
        <option value="22" '.((substr($exibirVendas[2],0,2)== "22")? "selected":"").'>22</option>
        <option value="23" '.((substr($exibirVendas[2],0,2)== "23")? "selected":"").'>23</option>
        <option value="24" '.((substr($exibirVendas[2],0,2)== "24")? "selected":"").'>24</option>
        <option value="25" '.((substr($exibirVendas[2],0,2)== "25")? "selected":"").'>25</option>
        <option value="26" '.((substr($exibirVendas[2],0,2)== "26")? "selected":"").'>26</option>
        <option value="27" '.((substr($exibirVendas[2],0,2)== "27")? "selected":"").'>27</option>
        <option value="28" '.((substr($exibirVendas[2],0,2)== "28")? "selected":"").'>28</option>
        <option value="29" '.((substr($exibirVendas[2],0,2)== "29")? "selected":"").'>29</option>
        <option value="30" '.((substr($exibirVendas[2],0,2)== "30")? "selected":"").'>30</option>
        <option value="31" '.((substr($exibirVendas[2],0,2)== "31")? "selected":"").'>31</option>
    </select>
</div>';

echo '
<div class="col-md-2">
    <label for="inputMonth" class="form-label">Mês</label>
    <select class="form-select" name="mes" aria-label="Default select example" id="inputMonth" required>
        <option value="01" '.((substr($exibirVendas[2],3,2) == "01")? "selected":"").'>01</option>
        <option value="02" '.((substr($exibirVendas[2],3,2) == "02")? "selected":"").'>02</option>
        <option value="03" '.((substr($exibirVendas[2],3,2) == "03")? "selected":"").'>03</option>
        <option value="04" '.((substr($exibirVendas[2],3,2) == "04")? "selected":"").'>04</option>
        <option value="05" '.((substr($exibirVendas[2],3,2) == "05")? "selected":"").'>05</option>
        <option value="06" '.((substr($exibirVendas[2],3,2) == "06")? "selected":"").'>06</option>
        <option value="07" '.((substr($exibirVendas[2],3,2) == "07")? "selected":"").'>07</option>
        <option value="08" '.((substr($exibirVendas[2],3,2) == "08")? "selected":"").'>08</option>
        <option value="09" '.((substr($exibirVendas[2],3,2) == "09")? "selected":"").'>09</option>
        <option value="10" '.((substr($exibirVendas[2],3,2) == "10")? "selected":"").'>10</option>
        <option value="11" '.((substr($exibirVendas[2],3,2) == "11")? "selected":"").'>11</option>
        <option value="12" '.((substr($exibirVendas[2],3,2) == "12")? "selected":"").'>12</option>
    </select>
</div>';

echo '
<div class="col-md-2">
    <label for="inputYear" class="form-label">Ano</label>
    <input type="number" name="ano" class="form-control" id="inputYear" placeholder="AAAA" required value="'.substr($exibirVendas[2],6,4).'">
</div>';

echo '
<div class="form-floating">
    <textarea class="form-control" name="observacao" id="floatingTextarea2" style="height: 100px">'.$exibirVendas[3].'</textarea>
    <label for="floatingTextarea2">Observação</label>
</div>';

$controle = 1;
while ($exibirProdutos = mysqli_fetch_array($consulta_produtos))
  {
    echo'
    <div class="col-md-1" id="produto">
        <label for="InputId" class="form-label">ID</label>
        <input type="text" name="id'.$controle.'" class="form-control" id="InputId" placeholder="" value="'.$exibirProdutos[0].'" readonly>
    </div>';

    echo '
    <div class="col-md-6" id="produto">
        <label for="InputProduto" class="form-label">Produto</label>
        <input type="text" name="prod'.$controle.'" class="form-control" id="InputProduto" placeholder="" required value="'.$exibirProdutos[1].'">
    </div>';

    echo '
    <div class="col-md-2" id="quantidade">
        <label for="InputQuantidade" class="form-label">Quantidade</label>
        <input type="number" name="qtd'.$controle.'" class="form-control" id="InputQuantidade" placeholder="" required value="'.$exibirProdutos[2].'">
    </div>';

    echo '
    <div class="col-md-2" id="preco">
        <label for="InputPreco" class="form-label">Preço unitário</label>
        <input type="number" name="preco'.$controle.'" step="any" class="form-control" id="InputPreco" placeholder="" required value="'.$exibirProdutos[3].'">
    </div>';

    echo '<hr>';

    $controle++;
  }

?>

<div class="col-12">
    <button type="submit" class="btn btn-primary">Editar registro</button>
    <a class="btn btn-danger" href="consultar.php">Cancelar</a>
</div>

</form>   
</div>
</body>
</html>

