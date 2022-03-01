<?php

namespace Moraes\Banco\Modelo\Conta;

use Moraes\Banco\Modelo\Conta\Conta;

class ContaCorrente extends Conta {
    public function getPercentualTarifa(): float
    {
        return 0.05;
    }
    
    public function transferir(float $valor, Conta $contaDestino): void
    {
        if ($valor > $this->saldo) {
            echo 'Saldo indisponível!';
            return;
        };
        
        $this->sacar($valor);
        $contaDestino->depositar($valor);
    }
}