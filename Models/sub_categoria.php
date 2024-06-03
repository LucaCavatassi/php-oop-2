<?php
require_once __DIR__ . "/categoria.php";

class Sub_categoria extends Categoria {
    private string $sub_categoria;

    // SETTER categoria
    public function __construct (string $_sub_categoria, string $_categoria) {
        parent::__construct($_categoria);
        $this->sub_categoria = $_sub_categoria;
    }

    // GETTER categoria
    public function getSubCategoria () {
        return $this->sub_categoria;
    }

}