<?php

require_once 'Orcamento.php';
require_once 'CalcularImpostos.php';


$orcamento1 = new Orcamento();
$orcamento1-> valor = 100;
$orcamento1-> quantidadeItem = 100;
$orcamento1->aprova();


$listaOrcamento = new ListaDeOrcamento();
$listaOrcamento->addOrcamento($orcamento1);


foreach ($listaOrcamento as $value) {
    # code...
}

