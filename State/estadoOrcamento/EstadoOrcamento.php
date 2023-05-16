<?php

namespace Project\DesignPattern\EstadoOrcamento;

abstract class EstadoOrcamento {
   /**
    * @throws DomainExcetion
    */
    abstract public function calculaDescontoExtra(Orcamento $orcamento): float;

    public function aprova(Orcamento $orcamento){
        throw new DomainException("Orçamento não pode ser aprovado!");
    }

    public function reprova(Orcamento $orcamento){
        throw new DomainException("Orçamento  não pode ser reprovado!");
    }

    public function finalizado(Orcamento $orcamento){
        throw new DomainException("Orçamento  não pode ser finalizado!");
    }
}