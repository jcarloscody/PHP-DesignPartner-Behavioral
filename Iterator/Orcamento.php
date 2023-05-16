<?php

namespace Project\DesignPattern;

class Orcamento {
    public float $valor;
    public int $quantidadeItem;
    public EstadoOrcamento $estado;

    public function __constructor(){
       $this->$estado = new EmAprovacao();
    }

    public function aplicaDescontoExtra(){
        $this->valor -= this->$estado->calculaDescontoExtra($this);
    }

    public function aprova(){
        $this->estado->aprova($this);
    }

    public function reprova(){
        $this->estado->reprova($this);
    }

    public function finalizado(){
        $this->estado->finalizado($this);
    }
}