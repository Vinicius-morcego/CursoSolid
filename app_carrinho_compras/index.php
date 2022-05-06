<?php

require __DIR__."/vendor/autoload.php";

use src\CarrinhoCompra;

$carrinho1 = new CarrinhoCompra();

echo '<h3>Sem SRP</h3>';

echo 'Valor Total: '.$carrinho1->exibirValorTotal();
echo "<br />";
/*
$carrinho1->adicionarItem('Biscicleta', 750.10);
$carrinho1->adicionarItem('Geladeira', 2050.16);
$carrinho1->adicionarItem('Tapete', 50.12);
*/


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

