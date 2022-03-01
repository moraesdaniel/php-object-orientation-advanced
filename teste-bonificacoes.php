<?php

use Moraes\Banco\Service\ControladorBonificacoes;
use Moraes\Banco\Modelo\Funcionario\{DataScience, Gerente, Desenvolvedor};
use Moraes\Banco\Modelo\Cpf;

require_once 'autoload.php';

$funcionarioUm = new Gerente(
    'Daniel Moraes',
    new Cpf('12345678911'),
    3000
);

$funcionarioDois = new Desenvolvedor(
    'Diego Vaisaber',
    new Cpf('12345678910'),
    5000
);

$funcionarioTres = new DataScience(
    'Sabrina DS',
    new Cpf('12345678912'),
    2500
);

$funcionarioDois->subirNivel();

$controlador = new ControladorBonificacoes();
$controlador->adicionarBonificacao($funcionarioUm);
$controlador->adicionarBonificacao($funcionarioDois);
$controlador->adicionarBonificacao($funcionarioTres);

echo "Total de bonificações: " . $controlador->getTotalBonificacoes();
