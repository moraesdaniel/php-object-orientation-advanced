<?php

use Moraes\Banco\Service\ControladorBonificacoes;
use Moraes\Banco\Modelo\Funcionario\{Gerente, Desenvolvedor};
use Moraes\Banco\Modelo\Cpf;

require_once 'autoload.php';

$funcionarioUm = new Gerente(
    'Daniel Moraes',
    new Cpf('12345678911'),
    'Gerente',
    3000
);

$funcionarioDois = new Desenvolvedor(
    'Diego Vaisaber',
    new Cpf('12345678910'),
    'Desenvolvedor',
    5000
);

$funcionarioDois->subirNivel();

$controlador = new ControladorBonificacoes();
$controlador->adicionarBonificacao($funcionarioUm);
$controlador->adicionarBonificacao($funcionarioDois);

echo "Total de bonificações: " . $controlador->getTotalBonificacoes();
