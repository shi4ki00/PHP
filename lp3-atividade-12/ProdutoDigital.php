<?php

require_once "Produto.php";

class ProdutoDigital extends Produto{
    
    private float $tamanhoArquivoMB;
    private string $formatoArquivo;
    private int $limiteDownloads;
    private string $linksServidorNuvem;
    private string $token;

    public function getTamanhoArquivosMB(){
        return $this->tamanhoArquivoMB;   
    }
    public function setTamanhoArquivosMB(float $tamanhoArquivoMB){
        $this->tamanhoArquivoMB = $tamanhoArquivoMB;
    }    


    public function getFormatoArquivo(){
        return $this->formatoArquivo;   
    }
    public function setFormatoArquivo(string $formatoArquivo){
        $this->formatoArquivo = $formatoArquivo;
    }


    public function getLimiteDownloads(){
        return $this->limiteDownloads;   
    }
    public function setLimiteDownloads(int $limiteDownloads){
        $this->limiteDownloads = $limiteDownloads;
    }


    public function getLinksServidorNuvem(){
        return $this->linksServidorNuvem;   
    }
    public function setLinksServidorNuvem(string $linksServidorNuvem){
        $this->linksServidorNuvem = $linksServidorNuvem;
    }


    public function getToken(){
        return $this->token;   
    }
    public function setToken(string $token){
        $this->token = $token;
    }


    public function calcularPrecoVenda(){
        return $this->getPrecoBase() + 2;
    }

    public function verificarDisponibilidade(){
        if($this->getIsAtivo() == true && !empty($this->linksServidorNuvem)){
            return true;
        } else {
            return false;
        }
    }

    public function gerarLinkExclusivo(string $id_usuario){
        $this->token = $this->linksServidorNuvem . $id_usuario . md5(time());
        return $this->token;
    }

    public function revogarAcesso(string $id_usuario){
        if($this->limiteDownloads == 20){
            unset($this->token);
        }
    }


}

?>
