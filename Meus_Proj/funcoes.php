<?php
//--------------------------------------------------------------------------
// Inicio - Programa que cria funções
//--------------------------------------------------------------------------

//carregando array
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
//--------------------------------------------------------------------------
function exibeMensagem($mensagem)
{
    echo $mensagem . PHP_EOL;
}
//--------------------------------------------------------------------------
function adiciona2($x)
{
    return $x + 2 . PHP_EOL ;
}
$resultado = adiciona2(5);
echo $resultado;
//--------------------------------------------------------------------------
//Certo
function soma($numero1, float $numero2)
{
    return $numero1 + $numero2;
}
$resultado = soma(2, 2);
//--------------------------------------------------------------------------


//--------------------------------------------------------------------------
if (500 > $contasCorrentes['123456789'] ['saldo'] ){
   exibeMensagem("Você não pode savar");
}else {
   $contasCorrentes['123456789'] ['saldo'] -= 500;
}
//--------------------------------------------------------------------------
if (500 > $contasCorrentes['123456789'] ['saldo'] ){
    exibeMensagem("Você não pode savar");
}else {
    $contasCorrentes['123456789'] ['saldo'] -= 500;
}
//--------------------------------------------------------------------------

foreach ($contasCorrentes as $cpf => $conta) {
   echo $cpf . '-' . $conta['titular'] . '-'. $conta['saldo'] . PHP_EOL;
}