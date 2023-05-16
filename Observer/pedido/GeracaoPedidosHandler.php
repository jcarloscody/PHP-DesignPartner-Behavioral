<?php

namespace Project\DesignPattern;

class GeracaoPedidosHandler{

    public array $acoesAposGerarPedido = [];

    public function __constructor(/**injeção de repos, service */){
       
    }

    public function adicionaAcaoAoGerarPedido(AposGerarPedido $aposGerarPedido){
        $this->acoesAposGerarPedido[] = $aposGerarPedido;
    }

    public function execute(GeracaoPedidos $gerarPedido){
        $orcamento = new Orcamento();
        $orcamento->quantidadeItem = $gerarPedido->$numeroDeItens;
        $orcamento->valor =$gerarPedido->$valorOrcamento;

        $pedido = new Pedido();
        $pedido->$dataFinalizacao = new DateTimeImmutable();
        $pedido->nomeCliente = $gerarPedido->$nomeCliente;
        $pedido->$orcamento = $orcamento;

        foreach ($this->acoesAposGerarPedido as $value) {
            $value->executaAcao($pedido);
        }
    }
}