<?php

mostrarTemplate();
echo "Escolha uma opção de categoria abaixo: \n";
echo "~~ (1)Insumos ou (2)Produtos ~~ \n";
$resposta = fgetc(STDIN);

switch ($resposta) {
    case $resposta == 1:
        echo "escolheu insumos";
        break;
    case $resposta == 2;
        require 'Produtos.php';
        $produtos = new Produtos();
        $produtos->escolhas();
        break;
    default:
        echo "valor diferente do esperado!";
}

function mostrarTemplate()
{
    echo "=============================================================================================\n";
    echo "x             ___      _                           ___                    _                 x\n";
    echo "x           / __|__ _| |__ ___ _ _   ___ _ __    / __|__ _ _ __  __ _ __| |__ _ ___         x\n";
    echo "x          \__ / _` | '_ / _ | '_| / -_| '  \  | (__/ _` | '  \/ _` / _` / _` (_-<          x\n";
    echo "x           |___\__,_|_.__\___|_|   \___|_|_|_|  \___\__,_|_|_|_\__,_\__,_\__,_/__/         x\n";
    echo "x                                                                                           x\n";
    echo "=============================================================================================\n";
    echo "============== by:mariofneto ================================================================\n";
    echo "=============================================================================================\n";
    echo "\n";
}
