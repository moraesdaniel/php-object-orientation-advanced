<?php

use Moraes\Banco\Modelo\Cpf;
use Moraes\Banco\Modelo\Funcionario\Diretor;
use Moraes\Banco\Modelo\Funcionario\Gerente;
use Moraes\Banco\Service\Autenticador;

require_once('autoload.php');

$autenticador = new Autenticador();
$funcionario = new Gerente(
    "Daniel Moraes",
    new Cpf('04685965412'),
    10000
);

$autenticador->realizarLogin($funcionario, '4321');