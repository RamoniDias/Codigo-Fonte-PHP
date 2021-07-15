<?php
$conta1 =['titular' => 'ramoni',
          'saldo'   =>  5000
];
$conta2 =['titular' => 'maria',
          'saldo'   =>  2500
];
$conta3 =['titular' => 'estagiario',
          'saldo'   =>  500
];
$contasCorrentes = [$conta1, $conta2, $conta3 ];

for($i = 0; $i < count($contasCorrentes); $i++){
    echo $contasCorrentes[$i] ["titular"]. '<br>';
}