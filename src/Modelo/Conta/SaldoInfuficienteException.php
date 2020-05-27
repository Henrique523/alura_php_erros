<?php


namespace Alura\Banco\Modelo\Conta;

class SaldoInfuficienteException extends \DomainException
{
    public function __construct(float $valorSaque, float $saldoAtual)
    {
        $mensagem = "Voce tentou sacar {$valorSaque}, mas possui {$saldoAtual} em conta." . PHP_EOL;
        parent::__construct($mensagem);
    }

}