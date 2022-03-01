<?php

require_once 'autoload.php';

use Moraes\Banco\Modelo\Conta\{Conta, Titular};
use Moraes\Banco\Modelo\{Cpf, Endereco};

$primeiraConta = new Conta(
    new Titular(
        new Cpf('123.456.789-00'), 
        'Daniel Moraes',
        new Endereco('Maringá', 'Parque Hortência', 'Rua Cardeal', '70')
    )
);

$segundaConta = new Conta(
    new Titular(
        new Cpf('456.789.123-00'), 
        'João da Silva',
        new Endereco('Maringá', 'Parque Hortência', 'Rua Cardeal', '70')
    )
);

echo "Titular: " . $primeiraConta->getNomeTitular() . PHP_EOL;
echo "=====================================================================" . PHP_EOL;
echo "Titular: " . $segundaConta->getNomeTitular() . PHP_EOL;

echo Conta::getNumeroDeContas() . PHP_EOL;

unset($segundaConta);

echo Conta::getNumeroDeContas() . PHP_EOL;

var_dump($primeiraConta);