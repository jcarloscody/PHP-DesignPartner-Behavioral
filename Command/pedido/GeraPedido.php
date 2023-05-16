<?php

$valorOrcamento = $argv[1];
$numeroDeItens = $argv[2];
$nomeCliente = $argv[3];

$geracaoPedido = new GeracaoPedidos($valorOrcamento, $numeroDeItens, $nomeCliente);
$geracaoPedidoHandler = new GeracaoPedidoHandler();
$geracaoPedidoHandler->execute($geracaoPedido);

// DDD - Domain drive design, modelagem orientada a dominio. 
// criacao de uma estrutura de classes que a partir de uma interface comum sabe como executar alguma tarefa.