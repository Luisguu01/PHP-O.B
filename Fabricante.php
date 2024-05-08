<?php
class fabricante {
    private $nome;
    private $endereco;
    private $cnpj;

    public function __construct($nome, $endereco, $cnpj){
        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->cnpj = $cnpj;
    }

    

    public function __destruct(){
        //codigo destruido
    }

}
?>
