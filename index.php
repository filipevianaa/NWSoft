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

<form method="post" class="row g-3 col-10 m-auto" action="processaCadastro.php">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Tipo de pagamento</label>
    <select name="tipo_pagamento" class="form-select" aria-label="Default select example" required>
    <option value="À vista">À vista</option>
    <option value="Parcelado">Parcelado</option>
</select>
  </div>
  <div class="col-md-6">
  <label for="InputNota" class="form-label">Número da nota</label>
    <input type="number" name="nota" class="form-control" id="InputNota" placeholder="" required>
  </div>
  
  <div class="col-md-2">
    <label for="inputDay" class="form-label">Dia</label>
    <select class="form-select" name="dia" aria-label="Default select example" id="InputDay" required>
    <option value="01">01</option>
    <option value="02">02</option>
    <option value="03">03</option>
    <option value="04">04</option>
    <option value="05">05</option>
    <option value="06">06</option>
    <option value="07">07</option>
    <option value="08">08</option>
    <option value="09">09</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>
    <option value="13">13</option>
    <option value="14">14</option>
    <option value="15">15</option>
    <option value="16">16</option>
    <option value="17">17</option>
    <option value="18">18</option>
    <option value="19">19</option>
    <option value="20">20</option>
    <option value="21">21</option>
    <option value="22">22</option>
    <option value="23">23</option>
    <option value="24">24</option>
    <option value="25">25</option>
    <option value="26">26</option>
    <option value="27">27</option>
    <option value="28">28</option>
    <option value="29">29</option>
    <option value="30">30</option>
    <option value="31">31</option>
</select>
  </div>

  <div class="col-md-2">
    <label for="inputMonth" class="form-label">Mês</label>
    <select class="form-select" name="mes" aria-label="Default select example" id="inputMonth" required>
    <option value="01">01</option>
    <option value="02">02</option>
    <option value="03">03</option>
    <option value="04">04</option>
    <option value="05">05</option>
    <option value="06">06</option>
    <option value="07">07</option>
    <option value="08">08</option>
    <option value="09">09</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>
</select>
  </div>

  <div class="col-md-2">
  <label for="inputYear" class="form-label">Ano</label>
    <input type="number" name="ano" class="form-control" id="inputYear" placeholder="AAAA" required>
  </div>

  <div class="form-floating">
  <textarea class="form-control" name="observacao" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
  <label for="floatingTextarea2">Observação</label>
</div>



<div class="col-md-6" id="produto">
  <label for="InputProduto" class="form-label">Produto</label>
  <input type="text" name="prod1" class="form-control" id="InputProduto" placeholder="" required>
</div>

<div class="col-md-2" id="quantidade">
  <label for="InputQuantidade" class="form-label">Quantidade</label>
  <input type="number" name="qtd1" class="form-control" id="InputQuantidade" placeholder="" required>
</div>

<div class="col-md-2" id="preco">
  <label for="InputPreco" class="form-label">Preço unitário</label>
  <input type="number" name="preco1" step="any" class="form-control" id="InputPreco" placeholder="" required>
</div>



<div class="col-12">
<button type="button" class="btn btn-primary" onclick="adicionarCampo()"> Adicionar mais produtos </button>
<hr>
  </div>


  <div class="col-12">
    <button type="submit" class="btn btn-primary">Cadastrar venda</button>
  </div>

</form>

<script src="js/helpers.js"></script>
    
</body>
</html>