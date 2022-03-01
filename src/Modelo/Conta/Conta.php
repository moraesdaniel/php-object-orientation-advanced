<?php

namespace Moraes\Banco\Modelo\Conta;

abstract class Conta
{
    private Titular $titular;
    private float $saldo;
    private static $numeroDeContas = 0;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;

        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    public function getSaldo(): float
    {
        return $this->saldo;
    }

    public function getNomeTitular(): string
    {
        return $this->titular->getNome();
    }

    public function getCpfTitular(): string
    {
        return $this->titular->getCpf();
    }

    public function sacar(float $valor): void
    {
        $tarifaSaque = $valor * $this->getPercentualTarifa();
        $valorASacar = $valor + $tarifaSaque;
        if ($valorASacar > $this->saldo) {
            echo 'Saldo insuficiente!';
            return;
        };

        $this->saldo -= $valorASacar;
    }

    public function depositar(float $valor): void
    {
        if ($valor < 0) {
            echo 'O valor precisa ser positivo!';
            return;
        };
            
        $this->saldo += $valor;
    }

    public static function getNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }

    abstract protected function getPercentualTarifa(): float;
}