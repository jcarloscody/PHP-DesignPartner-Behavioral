<?php

require_once 'Orcamento.php';
require_once 'CalcularImpostos.php';

$calculadoraDeDesconto = new CalculadoraDeDesconto();

$orcamento = new Orcamento();
$orcamento-> valor = 100;
$orcamento-> quantidadeItem = 100;

echo $calculadoraDeDesconto->calcularDesconto($orcamento->valor);
