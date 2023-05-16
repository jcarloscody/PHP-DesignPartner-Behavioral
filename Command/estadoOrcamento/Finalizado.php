<?php

namespace Project\DesignPattern\EstadoOrcamento;

class Finalizado  implements EstadoOrcamento{

    public function calculaDescontoExtra(Orcamento $orcamento): float{
        throw new DomainException("Orçamento Finalizado!");
    }
}