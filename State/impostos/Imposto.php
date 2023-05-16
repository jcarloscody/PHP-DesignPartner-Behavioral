<?php

namespace Project\DesignPattern\Impostos;

interface Imposto {
    public function calcularImpostos(Orcamento $orcamento): float ;
}