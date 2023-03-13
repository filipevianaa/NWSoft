var controleCampo = 1;
function adicionarCampo() {
    controleCampo++;

    document.getElementById('produto').insertAdjacentHTML('beforeend', '<br><input type="text" name="prod'+controleCampo+'" class="form-control" id="InputProduto" placeholder="">')
    
    document.getElementById('quantidade').insertAdjacentHTML('beforeend','<br><input type="number" name="qtd'+controleCampo+'" class="form-control" id="InputQuantidade" placeholder=""></input>')

    document.getElementById('preco').insertAdjacentHTML('beforeend','<br><input type="number" name="preco'+controleCampo+'" step="any" class="form-control" id="InputPreco" placeholder="">')

}

async function excluirVenda(numero_nota) {
    var confirmar = confirm("Tem certeza que deseja excluir essa venda?");

    if(confirmar == true){
        const dados = await fetch('processaExcluir.php?numero_nota='+numero_nota)
    }

}
