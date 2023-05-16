<?php

namespace Project\DesignPattern\Desconto;

require_once 'Orcamento.php';

class SemDesconto extends Desconto {

    public function __construct(Desconto $proximoDesconto){
        parent::__construct(null);
    }
    
    /// o orçamento que tiver mais de 5 itens, tem desconto. 
    public function calcularDesconto(Orcamento $orcamento): float {
        return 0;
    }
}