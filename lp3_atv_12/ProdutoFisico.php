<?php

require_once 'Produto4.php';

class ProdutoFisico extends Produto4
{
    private float $peso;
    private string $dimensoesCxLxA;
    private float $custoFreteFixo;
    private string $transportadoraParceira;

    public function __construct(
        int $codigo,
        string $nome,
        string $descricao,
        float $precoBase,
        int $quantidadeEstoque,
        float $peso,
        string $dimensoesCxLxA,
        float $custoFreteFixo,
        string $transportadoraParceira
    ) {
        parent::__construct(
            $codigo,
            $nome,
            $descricao,
            $precoBase,
            $quantidadeEstoque
        );

        $this->peso = $peso;
        $this->dimensoesCxLxA = $dimensoesCxLxA;
        $this->custoFreteFixo = $custoFreteFixo;
        $this->transportadoraParceira = $transportadoraParceira;
    }

    // GETTERS

    public function getPeso(): float
    {
        return $this->peso;
    }

    public function getDimensoesCxLxA(): string
    {
        return $this->dimensoesCxLxA;
    }

    public function getCustoFreteFixo(): float
    {
        return $this->custoFreteFixo;
    }

    public function getTransportadoraParceira(): string
    {
        return $this->transportadoraParceira;
    }

    // SETTERS

    public function setPeso(float $peso): void
    {
        $this->peso = $peso;
    }

    public function setDimensoesCxLxA(string $dimensoesCxLxA): void
    {
        $this->dimensoesCxLxA = $dimensoesCxLxA;
    }

    public function setCustoFreteFixo(float $custoFreteFixo): void
    {
        $this->custoFreteFixo = $custoFreteFixo;
    }

    public function setTransportadoraParceira(string $transportadoraParceira): void
    {
        $this->transportadoraParceira = $transportadoraParceira;
    }

    public function calcularPrecoVenda(): float
    {
        return $this->getPrecoBase()
            + $this->custoFreteFixo
            + ($this->getPrecoBase() * 0.05);
    }

    public function verificarDisponibilidade(): bool
    {
        return $this->getQuantidadeEstoque() > 0
            && $this->getIsAtivo();
    }

    public function calcularVolumeCubico(): float
    {
        $medidas = explode("x", strtolower($this->dimensoesCxLxA));

        if (count($medidas) != 3) {
            return 0;
        }

        $comprimento = (float)$medidas[0];
        $largura = (float)$medidas[1];
        $altura = (float)$medidas[2];

        return $comprimento * $largura * $altura;
    }

    public function estimarPrazoEntrega(string $cepDestino): int
    {
        return rand(2, 15);
    }
}
