<?php

namespace src;

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

   public function itemValido(string $item, float $valor){
       if($item == ""){
           return false;
       }

       if($valor <= 0){
           return false;
       }
       return true;
   }
   public function adicionarItem(string $item, float $valor){
    if($this->itemValido()){
        array_push($this->itens, [$item, $valor]);
        $this->valorTotal += $valor;
        return true;
    }
        return false;
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