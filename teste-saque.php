<?php

use Moraes\Banco\Modelo\Conta\{Conta, ContaCorrente, ContaPoupanca, Titular};
use Moraes\Banco\Modelo\Cpf;
use Moraes\Banco\Modelo\Endereco;

require_once 'autoload.php';

$conta = new ContaCorrente(
    new Titular(
        new Cpf('05840590940'),
        'Daniel Moraes',
        new Endereco(
            'Maringá',
            'Parque Hortência',
            'Rua Cardeal',
            '70'
        )
    )
);

$conta->depositar(500);

$conta->sacar(100);

echo 'Saldo: ' . $conta->getSaldo();