<?php

namespace Project\DesignPattern\EstadoOrcamento;

class Reprovado implements EstadoOrcamento{

    public function calculaDescontoExtra(Orcamento $orcamento): float{
        throw new DomainException("Orçamento reprovado!");
    }

    public function finalizado(Orcamento $orcamento){
       $orcamento->$estado = new Finalizado();
    }
}