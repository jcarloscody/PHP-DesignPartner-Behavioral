<?php

namespace Project\DesignPattern;

require 'Orcamento.php';

class CalcularImpostos {
    
    public function calcular(Orcamento $orcamento): float {
        return $orcamento->valor * 0.1;
    }
}