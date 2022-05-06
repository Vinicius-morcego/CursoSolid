<?php

require __DIR__."/vendor/autoload.php";

use src\CarrinhoCompra;
use src\Item;
use src\Pedido;
use src\EmailService;

echo '<h3>Com SRP</h3>';


//----------------------------------
$pedido = new Pedido();

$item1 = new Item();
$item2 = new Item();

$item1->setDescricao('Porta Copos');
$item1->setValor(4.55);

$item2->setDescricao('Copos');
$item2->setValor(2.35);
//----------------------------------
echo'<h4>Pedidos</h4>';
echo'<pre>';
print_r($pedido);
echo'</pre>';




/*
echo 'Valor Total: '.$carrinho1->exibirValorTotal();
echo "<br />";

$carrinho1->adicionarItem('Biscicleta', 750.10);
$carrinho1->adicionarItem('Geladeira', 2050.16);
$carrinho1->adicionarItem('Tapete', 50.12);
*/

/*
print_r($carrinho1->exibirItens());
echo "<br />";
echo 'Valor Total Recalculado: '.$carrinho1->exibirValorTotal();
echo "<br />";
echo 'Status: '.$carrinho1->exibirStatus();
echo "<br />";
if($carrinho1->validarCarrinho()){
    echo 'Pedido realizado com sucesso!';
}else{
    echo 'Erro ao confirmar o pedido. Carrinho vazio!';
}
echo "<br />";
echo 'Status: '.$carrinho1->exibirStatus();
*/

