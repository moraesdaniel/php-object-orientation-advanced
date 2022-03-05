<?php

use Moraes\Banco\Modelo\Cpf;
use Moraes\Banco\Modelo\Funcionario\Diretor;
use Moraes\Banco\Service\Autenticador;

require_once('autoload.php');

$autenticador = new Autenticador();
$diretor = new Diretor(
    "Daniel Moraes",
    new Cpf('04685965412'),
    10000
);

$autenticador->realizarLogin($diretor, '1234');