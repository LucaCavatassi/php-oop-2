<?php 
class Prodotto {
    private string $nome;
    private string $marca;
    private int $prezzo;
    private string $immagine;
    private bool $disponibilita;


    // SETTER NOME
    public function setNome (string $_nome) {
        $this->nome = $_nome;
    }

    // GETTER NOME
    public function getNome () {
        return $this->nome;
    }

    // SETTER MARCA
    public function setMarca (string $_marca) {
        $this->marca = $_marca;
    }

    // GETTER MARCA
    public function getMarca () {
        return $this->marca;
    }

    // SETTER PREZZO
    public function setPrezzo (string $_prezzo) {
        $this->prezzo = $_prezzo;
    }

    // GETTER PREZZO
    public function getPrezzo () {
        return $this->prezzo . "€";
    }

    // SETTER IMMAGINE
    public function setImg (string $_immagine) {
        $this->immagine = $_immagine;
    }

    // GETTER IMMAGINE
    public function getImg () {
        return $this->immagine;
    }

    // SETTER DISPONIBILITA
    public function setDisp (string $_disponibilita) {
        $this->disponibilita = $_disponibilita;
    }

    // GETTER DISPONIBILITA
    public function getDisp () {
        return $this->disponibilita;
    }
}
