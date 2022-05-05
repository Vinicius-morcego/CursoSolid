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
    array_push($this->itens, [$item, $valor]);
       $this->valorTotal += $valor;
       return true;
   }

   public function exibirValorTotal(){
       return $this->valorTotal;
   }

   public function exibirStatus(){
      $this->status;
   }

   public function confirmarPedido(){
        if($this->validarCarrinho)   {
            $this->status = 'confirmado';
            $this->enviarEmailConfirmacao();
            return true;
        }
        return false;
   }

   public function enviarEmailConfirmacao(){
    echo '<br>...Enviar email confirmação...</br>';
}

    public function validarCarrinho(){
        return count($this->itens) > 0;
    }
}