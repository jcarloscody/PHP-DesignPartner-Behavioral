<?php

namespace Project\DesignPattern\Imposto;

abstract class ImpostoCom2Aliquotas implements Imposto {

    public function calcularImpostos(Orcamento $orcamento): float {
        if ($this->deveAplicarTaxaMax($orcamento)) {
            return calculaMax($orcamento);
        }
        return calculaMin($orcamento);
    }
   abstract public function deveAplicarTaxaMax(Orcamento $orcamento): bool;
   abstract public function calculaMax(Orcamento $orcamento): float;
   abstract public function calculaMin(Orcamento $orcamento): float;
}