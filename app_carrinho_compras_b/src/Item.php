<?php

namespace src;

class Item{
    private $descricao;
    private $valor;

    public function __construct(){
        $this -> descricao = '';
        $this -> valor = 0;
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function getValor(){
        return $this->valor;
    }

    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }

    public function setValor($valor){
        $this->valor = $valor;
    }
}