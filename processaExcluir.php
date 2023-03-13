<?php

include_once("conexao.php");

$numero_nota = filter_input(INPUT_GET, "numero_nota", FILTER_SANITIZE_NUMBER_INT);

$sql_vendas = "delete from vendas where numero_nota = $numero_nota";
$sql_produtos = "delete from produtos_vendidos where numero_nota = $numero_nota";

$excluirVenda = mysqli_query($conexao,$sql_vendas);
$excluirProdutos = mysqli_query($conexao,$sql_produtos);

mysqli_close($conexao);

?>