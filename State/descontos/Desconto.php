<?php

namespace Project\DesignPattern\Desconto;

require_once 'Orcamento.php';

abstract class Desconto {
   protected ?Desconto $proximoDesconto;

    public function __construct(?Desconto $proximoDesconto){
        $this->proximoDesconto = $proximoDesconto;
    }

    /// o orçamento que tiver mais de 5 itens, tem desconto. 
   abstract public function calcularDesconto(Orcamento $orcamento): float;
}