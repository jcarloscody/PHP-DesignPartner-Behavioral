<?php

namespace Project\DesignPattern\Desconto;

require_once 'Orcamento.php';

class DescontoMaisDe500Reais extends Desconto {
    
    /// o orçamento que tiver mais de 5 itens, tem desconto. 
    public function calcularDesconto(Orcamento $orcamento): float {
        if ($orcamento->valor>500) {
            return $orcamento->valor * 0.2;
        }
        return $this->proximoDesconto->calcalcularDesconto($orcamento);
    }
}