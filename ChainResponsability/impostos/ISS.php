<?php

namespace Project\DesignPattern\Impostos;

require_once 'Orcamento.php';

class ISS implements Imposto{
    
    public function calcularImpostos(Orcamento $orcamento): float {
        return $orcamento->valor * 0.2;
    }
}