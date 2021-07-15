<?php

$contasCorrentes = [
    '123456789' => [
    'titular'   => 'ramoni',
    'saldo'     =>  5000
],
    '123456788' => [
    'titular'   => 'maria',
    'saldo'     =>  2500
],
    '123456799' => [
    'titular'   => 'estagiario',
    'saldo'     =>  500
]
];


$contasCorrentes ['123456789'] ['saldo'] -= 500 ;

//Atribui $conta para mostrar os outros campos como: titular,saldo e outro se tiver
foreach ($contasCorrentes as $cpf => $conta) {
   echo $cpf . '-' . $conta['titular'] . '-'. $conta['saldo'] . PHP_EOL;
}
