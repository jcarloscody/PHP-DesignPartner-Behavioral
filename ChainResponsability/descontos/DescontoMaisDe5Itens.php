<?php

namespace Project\DesignPattern\Desconto;

require_once 'Orcamento.php';

class DescontoMaisDe5Itens extends Desconto {
    
    /// o orçamento que tiver mais de 5 itens, tem desconto. 
    public function calcularDesconto(Orcamento $orcamento): float {
        if ($orcamento->quantidadeItem>5) {
            return $orcamento->valor * 0.1;
        }
        return $this->proximoDesconto->calcularDesconto($orcamento);
    }
}