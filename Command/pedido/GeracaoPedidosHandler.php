<?php

namespace Project\DesignPattern;

class GeracaoPedidosHandler{

    public function __constructor(/**injeção de repos, service */){
       
    }

    public function execute(GeracaoPedidos $gerarPedido){
        $orcamento = new Orcamento();
        $orcamento->quantidadeItem = $gerarPedido->$numeroDeItens;
        $orcamento->valor =$gerarPedido->$valorOrcamento;

        $pedido = new Pedido();
        $pedido->$dataFinalizacao = new DateTimeImmutable();
        $pedido->nomeCliente = $gerarPedido->$nomeCliente;
        $pedido->$orcamento = $orcamento;
    }
}