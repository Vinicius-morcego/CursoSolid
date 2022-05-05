<?php

require __DIR__."/vendor/autoload.php";

use App\CarrinhoCompra;

$carrinho1 = new CarrinhoCompra();
print_r($carrinho1->exibirItens());

echo 'Valor Total'.$carrinho1->exibirValorTotal();

$carrinho1->adicionarItem('Biscicleta', 750.10);
$carrinho1->adicionarItem('Geladeira', 2050.16);
$carrinho1->adicionarItem('Tapete', 50.12);

echo "<br />";
echo 'Valor Total Recalculado'.$carrinho1->exibirValorTotal();
print_r($carrinho1->exibirItens());