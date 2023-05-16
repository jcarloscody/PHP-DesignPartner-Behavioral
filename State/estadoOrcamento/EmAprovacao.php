<?php

namespace Project\DesignPattern\EstadoOrcamento;

class EmAprovacao implements EstadoOrcamento{

    public function calculaDescontoExtra(Orcamento $orcamento): float{
        return $orcamento->valor * 0.05;
    }

    public function reprova(Orcamento $orcamento){
        $orcamento->$estado = new Reprovado();
    }

    public function aprova(Orcamento $orcamento){
        $orcamento->$estado = new Aprovado();

    }
}