<?php

namespace Moraes\Banco\Service;

use Moraes\Banco\Modelo\Funcionario\Funcionario;

class ControladorBonificacoes
{
    private float $totalBonificacoes = 0;

    public function adicionarBonificacao(Funcionario $funcionario)
    {
        $this->totalBonificacoes += $funcionario->calcularBonificacao();
    }

    public function getTotalBonificacoes(): float
    {
        return $this->totalBonificacoes;
    }
}