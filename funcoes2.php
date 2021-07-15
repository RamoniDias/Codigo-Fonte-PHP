<?php
//-------------------------------------------------------------------------
//Inicio
//-------------------------------------------------------------------------
// Atribuir Valores para o Array
//-------------------------------------------------------------------------
$contasCorrentes = [
'123.456.789-10' => [
'titular' => 'Ramoni',
'saldo'   =>  5000
],
'123.456.689-11' => [
'titular' => 'Maria ',
'saldo'   =>  2500
],
'123.256.789-12' => [
'titular' => 'Junior',
'saldo'   =>  300
]
];
//-------------------------------------------------------------------------
// Incluir FUNCÕES de outro Arquivo
//-------------------------------------------------------------------------
include_once 'separar_file_fun.php';

//-------------------------------------------------------------------------
foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem($cpf . ' '. $conta['titular'] . ' ' . $conta['saldo'] . '<br>');
}
//-------------------------------------------------------------------------
$contasCorrentes['123.456.789-10'] = sacar(
    $contasCorrentes['123.456.789-10'],
    500
);

$contasCorrentes['123.456.689-11'] = sacar(
    $contasCorrentes['123.456.689-11'],
    200
);

$contasCorrentes['123.256.789-12'] = depositar(
    $contasCorrentes['123.256.789-12'],
    900
);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Contas correntes</h1>

<dl>
    <?php foreach($contasCorrentes as $cpf => $conta) { ?>
        <dt>
            <h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3>
        </dt>
        <dd>
            Saldo: <?= $conta['saldo']; ?>
        </dd>
    <?php } ?>
</dl>
</body>
</html>


