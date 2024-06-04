<?php 
trait Nome {
    private string $nome;

    // SETTER NOME
    public function setNome (string $_nome) {
        $this->nome = $_nome;
    }

    // GETTER NOME
    public function getNome () {
        return $this->nome;
    }
}