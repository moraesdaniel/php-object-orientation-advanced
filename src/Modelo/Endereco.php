<?php

namespace Moraes\Banco\Modelo;

/**
 * class Endereco
 * @property-read string $cidade 
 * @property-read string $bairro
 * @property-read string $rua
 * @property-read string $numero
 */
class Endereco 
{
    private string $cidade;
    private string $bairro;
    private string $rua;
    private string $numero;

    public function __construct(string $cidade, string $bairro, string $rua, string $numero)
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }
    
    public function getCidade()
    {
        return $this->cidade;
    }

    public function getBairro()
    {
        return $this->bairro;
    }

    public function getRua()
    {
        return $this->rua;
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function __toString()
    {
        return "Rua: {$this->rua} - Número: {$this->numero} - Bairro: {$this->bairro} - Cidade: {$this->cidade}";
    }

    public function __get(string $attributeName)
    {
        $method = "get" . ucfirst($attributeName);
        return $this->$method();
    }

    public function __set($attributeName, $value)
    {
        $method = "set" . ucfirst($attributeName);
        return $this->$method($value);
    }

    public function setCidade($cidade): void
    {
        $this->cidade = $cidade;
    }
}