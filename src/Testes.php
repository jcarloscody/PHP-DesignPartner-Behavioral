<?php

require_once 'Orcamento.php';
require_once 'CalcularImpostos.php';


// require 'vendor/autoload.php';

$calculadora = new CalcularImpostos();

$orcamento = new Orcamento();
$orcamento-> valor = 100;

echo $calculadora->calcula($orcamento->valor);
