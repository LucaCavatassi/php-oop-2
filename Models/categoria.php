<?php
require_once __DIR__ . "/prodotto.php";

class Categoria extends Prodotto {
    private string $categoria ;

    // SETTER categoria
    public function __construct (string $_categoria) {
        $this->categoria = $_categoria;
    }

    // GETTER categoria
    public function getCategoria () {
        return $this->categoria;
    }

}