<?php

namespace Project\DesignPattern;

class GeracaoPedidos{

    public float $valorOrcamento;
    public int $numeroItens;
    public string $nomeCliente;

    public function __constructor(float $valorOrcamento, int $numeroItens, string $nomeCliente){
        $this->$valorOrcamento = $valorOrcamento;
        $this->$numeroItens = $numeroItens;
        $this->$nomeCliente = $nomeCliente;
    }
}