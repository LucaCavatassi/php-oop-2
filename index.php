<?php
require_once __DIR__ . "/Models/prodotti.php";

$prodotto1 = new Prodotto();
$prodotto1->setNome("Ciccio");
$prodotto1->setMarca("Fox");
$prodotto1->setPrezzo(20);
$prodotto1->setImg("Ciccio");
$prodotto1->setDisp(true);

var_dump($prodotto1);
