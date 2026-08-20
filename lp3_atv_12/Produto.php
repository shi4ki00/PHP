<?php

abstract class Produto4
{
    private int $codigo;
    private string $nome;
    private string $descricao;
    private float $precoBase;
    private int $quantidadeEstoque;
    private bool $isAtivo;

    public function __construct(
        int $codigo,
        string $nome,
        string $descricao,
        float $precoBase,
        int $quantidadeEstoque
    ) {
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->precoBase = $precoBase;
        $this->quantidadeEstoque = $quantidadeEstoque;
        $this->isAtivo = $quantidadeEstoque > 0;
    }

    // GETTERS

    public function getCodigo(): int
    {
        return $this->codigo;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getDescricao(): string
    {
        return $this->descricao;
    }

    public function getPrecoBase(): float
    {
        return $this->precoBase;
    }

    public function getQuantidadeEstoque(): int
    {
        return $this->quantidadeEstoque;
    }

    public function getIsAtivo(): bool
    {
        return $this->isAtivo;
    }

    // SETTERS

    public function setCodigo(int $codigo): void
    {
        $this->codigo = $codigo;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function setDescricao(string $descricao): void
    {
        $this->descricao = $descricao;
    }

    public function setPrecoBase(float $precoBase): void
    {
        $this->precoBase = $precoBase;
    }

    public function setQuantidadeEstoque(int $quantidadeEstoque): void
    {
        $this->quantidadeEstoque = $quantidadeEstoque;
    }

    public function setIsAtivo(bool $isAtivo): void
    {
        $this->isAtivo = $isAtivo;
    }

    // Métodos

    public function adicionarEstoque(int $quantidade): void
    {
        if ($quantidade > 0) {
            $this->quantidadeEstoque += $quantidade;
            $this->isAtivo = true;
        }
    }

    public function baixarEstoque(int $quantidade): void
    {
        if ($quantidade > 0 && $quantidade <= $this->quantidadeEstoque) {

            $this->quantidadeEstoque -= $quantidade;

            if ($this->quantidadeEstoque == 0) {
                $this->isAtivo = false;
            }
        }
    }

    public function aplicarDesconto(float $percentual): void
    {
        if ($percentual >= 0 && $percentual <= 90) {

            $desconto = $this->precoBase * ($percentual / 100);

            $this->precoBase -= $desconto;
        }
    }

    // Métodos abstratos

    abstract public function calcularPrecoVenda(): float;

    abstract public function verificarDisponibilidade(): bool;
}
