<?php

use Moraes\Banco\Modelo\Endereco;

require_once('autoload.php');

$endereco1 = new Endereco("Maringá", "Zona 6", "Rua B", "15");
$endereco2 = new Endereco("Santa Izabel do Oeste", "Santo Antonio", "Angico", "2565");

echo $endereco1 . PHP_EOL . $endereco2 . PHP_EOL;

echo "==================================================" . PHP_EOL;
echo "Rua: " . $endereco1->rua . PHP_EOL;
echo "Número: " . $endereco1->numero . PHP_EOL;
echo "Bairro: " . $endereco1->bairro . PHP_EOL;
$endereco1->cidade = "Campo Mourão";
echo "Cidade: " . $endereco1->cidade;