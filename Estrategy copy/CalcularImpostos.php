<?php

namespace Project\DesignPattern;

require_once 'Orcamento.php';

class CalcularImpostos {
    
    public function calcular(Orcamento $orcamento, Imposto $imposto): float {
        return $imposto->calcularImpostos($orcamento);
    }
}