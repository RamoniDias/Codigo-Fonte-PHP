<?php
$idade = 18;
$numeroDePessoas = 2;
//$nome = "vinicius";
echo " Você só pode entrar se tiver mais de 18 anos ou ";
echo "a partir de 16 anos acompanhado.", PHP_EOL;

if ($idade >= 18){
    echo " Você tem $idade anos, pode entrar sozinho !!!". PHP_EOL;
}else if ($idade >= 16 && $numeroDePessoas > 1) {
    echo " Você só tem $idade anos, mas está acompanhado(a), então pode entrar.", PHP_EOL ;
}else {
    echo " Você só tem $idade anos, e não está acompanhado, então NÃO pode entrar.", PHP_EOL;
}
