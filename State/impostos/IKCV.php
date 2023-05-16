<?php

namespace Project\DesignPattern\Impostos;

require_once 'Orcamento.php';

/// Tem duas alíquotas: 
class IKCV implements ImpostoCom2Aliquotas {

    public function deveAplicarTaxaMax(Orcamento $orcamento): bool{
        return $orcamento->valor > 300 && $orcamento->quantidadeItem>3;
    }

    public function calculaMax(Orcamento $orcamento): float{
        return $orcamento->valor * 0.03;
    }

    public function calculaMin(Orcamento $orcamento): float {
        return $orcamento->valor * 0.01;
    }
}