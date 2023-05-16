<?php

class ListaDeOrcamento implements IteratorAggregate
{
    private array $orcamento = [];

    public function addOrcamento(Orcamento $orcamento){
        $this->orcamento[] = $orcamento;
    }

    public function getIterator(){
        return new ArrayIterator($this->orcamento);
    }
}
