<?php

use PHPUnit\Framework\TestCase;
use src\Item;

class ItemTest extends TestCase{


    public function testEstadoInicialItem(){
        $item = new Item();
        //asserções do PHPUnit

        $this->assertEquals('', $item->getDescricao());
        $this->assertEquals(0, $item->getvalor());
    }

    public function testGeteSetDescricao(){
        $descricao = 'Cadeira de plastico';

        $item = new Item();

        $item->setDescricao($descricao);

        $this->assertEquals($descricao, $item->getDescricao());
    }

    /**
     * @dataProvider dataValores
     */
    public function testGeteSetValor($valor){
        

        $item = new Item();

        $item->setValor($valor);

        $this->assertEquals($valor, $item->getValor());
    }

    public function testItemValido(){
        $item = new Item();

        //Teste para validar o método itemValido() da classe Item

        $item->setDescricao('Cadeira de plástico');
        $item->setValor(55.46);

        $this->assertEquals(true, $item->itemValido());

        //Teste para validar o retorno false do método caso a descrição esteja vazia
        $item->setDescricao('');
        $item->setValor(55.46);

        $this->assertEquals(false, $item->itemValido());

        //Teste para validar o retorno false do método caso o valor seja 0
        $item->setDescricao('Cadeira de plástico'); 
        $item->setValor(0);

        $this->assertEquals(false, $item->itemValido());


    }

    public function dataValores(){
        return[
            [25.1],
            [-5],
            [0]
        ];
    }

}