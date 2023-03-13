# PROJETO DE TESTE PRÁTICO PARA VAGA DE ESTÁGIO EM DESENVOLVIMENTO DA NWSOFT

## Descrição do projeto:
O projeto consiste em um CRUD (Create, Read, Update and Delete) de um sistema gerenciador de vendas, onde o usuário deve ser capaz de cadastrar uma nova venda informando a forma de pagamento, o número da nota fiscal, a data da venda, uma observação opcional e informar um ou mais produtos para a venda. Além disso, o usuário também deve ser capaz de visualizar todas as vendas cadastradas, excluir uma venda, bem como editar um registro.

Para o desenvolvimento do projeto, foram utilizadas as tecnologias HTML, Boostrap, PHP, JavaScript e MySQL.

## Banco de dados MySQL:
Os comandos utilizados para criar a database utilizada neste projeto encontram-se no arquivo comandosSQL.md

## Conexão com banco de dados:
A conexão foi configurada no arquivo conexao.php 

Foram definidas as variáveis com os dados do hostname, username, password e database e foi esabelecida a conexão utilizando o mysqli_connect.

# Página inicial (Cadastro de venda):
Foi construída utilizando o bootstrap, com campos de formulário dos tipos text, select, number e textarea.

O botão "Adicionar mais produtos" chama uma função em JavaScript no arquivo helpers.js para adicionar mais campos de produtos de forma dinâmica.

O botão "Cadastrar venda" envia os dados do formulário pelo método POST para a página processaCadastro.php, onde é realizada a query de cadastro no banco de dados.

## Processo de cadastro:
A página processaCadastro inclui o arquivo conexao.php pois é necessário abrir a conexao para realizar a query de insert.

Os dados recebidos do formulário são atribuídos a variáveis através da variável $_POST["chave"].

É definida então a query a ser utilizada no sql e enviada para o banco de dados atraves do mysqli_query

Se o número de linhas afetadas no banco de dados for maior que 0, então é retornada uma mensagem de sucesso no cadastro, se não, é retornada uma mensagem de erro.

## Consultar registros:
A página consultar.php realiza a query de select no banco de dados com um filtro onde é possível pesquisar por data ou por número da nota fiscal

as informações dos registros estão dispostas em cards, onde encontram-se os botões de editar e excluir.

## Excluir:
O botão de excluir chama uma função assíncrona no JavaScript que exibe um alert para confirmação se o usuáio deseja mesmo excluir e redireciona para o arquivo excluir.php onde é realizada a query de delete.

# Editar:
A página de editar.php exibe um formulário com os dados atuais, onde é possível editá-los e enviar o form pelo método POST para a página processaEditar.php para ser realizada a query de update.