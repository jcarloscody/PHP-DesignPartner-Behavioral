<?php

namespace Project\DesignPattern;

require_once 'Orcamento.php';

class CalculadoraDeDesconto {
    
    /// o orçamento que tiver mais de 5 itens, tem desconto. 
    public function calcularDesconto(Orcamento $orcamento): float {
        $deconto = new DescontoMaisDe500Reais(
            new DescontoMaisDe5Itens(
                new SemDesconto()
            )
        );
        return $desconto->calcularDesconto($orcamento);
    }
}