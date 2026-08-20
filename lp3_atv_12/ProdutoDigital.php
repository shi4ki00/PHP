<?php

require_once 'Produto4.php';

class ProdutoDigital extends Produto4
{
    private float $tamanhoArquivoMB;
    private string $formatoArquivo;
    private int $limiteDownloadsPermitidos;
    private string $linkServidorNuvem;

    private array $tokens = [];

    public function __construct(
        int $codigo,
        string $nome,
        string $descricao,
        float $precoBase,
        int $quantidadeEstoque,
        float $tamanhoArquivoMB,
        string $formatoArquivo,
        int $limiteDownloadsPermitidos,
        string $linkServidorNuvem
    ) {
        parent::__construct(
            $codigo,
            $nome,
            $descricao,
            $precoBase,
            $quantidadeEstoque
        );

        $this->tamanhoArquivoMB = $tamanhoArquivoMB;
        $this->formatoArquivo = $formatoArquivo;
        $this->limiteDownloadsPermitidos = $limiteDownloadsPermitidos;
        $this->linkServidorNuvem = $linkServidorNuvem;
    }

    // GETTERS

    public function getTamanhoArquivoMB(): float
    {
        return $this->tamanhoArquivoMB;
    }

    public function getFormatoArquivo(): string
    {
        return $this->formatoArquivo;
    }

    public function getLimiteDownloadsPermitidos(): int
    {
        return $this->limiteDownloadsPermitidos;
    }

    public function getLinkServidorNuvem(): string
    {
        return $this->linkServidorNuvem;
    }

    public function getTokens(): array
    {
        return $this->tokens;
    }

    // SETTERS

    public function setTamanhoArquivoMB(float $tamanhoArquivoMB): void
    {
        $this->tamanhoArquivoMB = $tamanhoArquivoMB;
    }

    public function setFormatoArquivo(string $formatoArquivo): void
    {
        $this->formatoArquivo = $formatoArquivo;
    }

    public function setLimiteDownloadsPermitidos(int $limiteDownloadsPermitidos): void
    {
        $this->limiteDownloadsPermitidos = $limiteDownloadsPermitidos;
    }

    public function setLinkServidorNuvem(string $linkServidorNuvem): void
    {
        $this->linkServidorNuvem = $linkServidorNuvem;
    }

    public function setTokens(array $tokens): void
    {
        $this->tokens = $tokens;
    }

    public function calcularPrecoVenda(): float
    {
        return $this->getPrecoBase() + 2.00;
    }

    public function verificarDisponibilidade(): bool
    {
        return $this->getIsAtivo()
            && !empty($this->linkServidorNuvem);
    }

    public function gerarLinkExclusivo(string $idUsuario): string
    {
        $token = md5(
            $idUsuario .
                time() .
                $this->formatoArquivo
        );

        $this->tokens[$idUsuario] = $token;

        return $this->linkServidorNuvem .
            "?token=" .
            $token;
    }

    public function revogarAcesso(string $idUsuario): void
    {
        if (isset($this->tokens[$idUsuario])) {
            unset($this->tokens[$idUsuario]);
        }
    }
}
