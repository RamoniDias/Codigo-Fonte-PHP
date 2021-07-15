<?php
$idade = 17;
//$nome = "vinicius";
echo " Você só pode entrar se tiver mais de 18 anos ? ", PHP_EOL;

if ($idade >= 18){
    echo " Você tem $idade anos.". PHP_EOL;
    echo " Pode entrar !!! ", PHP_EOL;
}
else {
    echo " Você só tem $idade anos, vc NÃO pode entrar.", PHP_EOL;
}
