<?php

namespace Project\DesignPattern\EstadoOrcamento;

class Aprovado implements EstadoOrcamento{

    public function calculaDescontoExtra(Orcamento $orcamento): float{
        return $orcamento->valor * 0.05;
    }

    public function finalizado(Orcamento $orcamento){
        $orcamento->$estado = new Finalizado();
    }
}