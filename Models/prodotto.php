<?php 
require_once __DIR__ . "/nome.php";

class Prodotto {
    use Nome;
    private string $marca;
    private float $prezzo;
    private string $immagine;
    private bool $disponibilita;


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
        if ($this->prezzo < 0) {
            throw new Exception ("<strong>Il prezzo deve essere maggiore di 0€</strong>");
        } else {
            echo $this->prezzo . "€";
        }
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
