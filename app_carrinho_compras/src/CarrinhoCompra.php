<?php

namespace App;

class CarrinhoCompra{
   //atributos
   private $itens;
   private $status;
   private $valorTotal;

   //metodos
   public function __construct(){
    $this->itens = [];
    $this->status = 'aberto';
    $this->valorTotal = 0;

   }

   public function exibirItens(){
       return $this->itens;
   }

   public function adicionarItem(string $item, float $valor){
       array_push($this->itens, ["item" -> $item, "valor" -> $valor]);
       $this->valorTotal += $valor;
       return true;
   }

   public function exibirValorTotal(){
       return $this->valorTotal;
   }
}