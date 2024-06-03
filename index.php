<?php
require_once __DIR__ . "/Models/prodotto.php";
require_once __DIR__ . "/Models/categoria.php";
require_once __DIR__ . "/Models/sub_categoria.php";

$prodotti = [];

// CREO PRODOTTO 1
$prodotto1 = new Sub_categoria("Cuccia", "Cane");
$prodotto1->setNome("Classic");
$prodotto1->setMarca("Spike");
$prodotto1->setPrezzo(69.99);
$prodotto1->setImg("https://bricofer.org/public/articoli/cuccia-per-cane-da-esterno-113500-polipropilene.jpg");
$prodotto1->setDisp(true);

$prodotti[] = $prodotto1;

// CREO PRODOTTO 2
$prodotto2 = new Sub_categoria("Cibo", "Gatto");
$prodotto2->setNome("Gourmet");
$prodotto2->setMarca("Purina");
$prodotto2->setPrezzo(2.50);
$prodotto2->setImg("https://www.tigota.it/media/catalog/product/b/i/big_396751_847948_01_gdvz6ifbduwvg7jh.jpg");
$prodotto2->setDisp(true);

$prodotti[] = $prodotto2;

// CREO PRODOTTO 3
$prodotto3 = new Sub_categoria("Accessori", "Cane");
$prodotto3->setNome("Corda Osso");
$prodotto3->setMarca("Trixie");
$prodotto3->setPrezzo(5.99);
$prodotto3->setImg("https://arcaplanet.vtexassets.com/arquivos/ids/223864/trixie-cane-gioco-corda.jpg?v=637454736645100000");
$prodotto3->setDisp(true);

$prodotti[] = $prodotto3;

// CREO PRODOTTO 4
$prodotto4 = new Sub_categoria("Accessori", "Gatto");
$prodotto4->setNome("Lettiera Autopulente Smart");
$prodotto4->setMarca("Retrin");
$prodotto4->setPrezzo(399.99);
$prodotto4->setImg("https://m.media-amazon.com/images/I/71WRTKV7tXL._AC_SL1500_.jpg");
$prodotto4->setDisp(false);

$prodotti[] = $prodotto4;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center">WELCOME TO THE SHOP</h1>
    <div class="container">
        <div class="row">
            <div class="col d-flex justify-content-center gap-2">
                <?php foreach ($prodotti as $cur_prodotto) { ?>
                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo $cur_prodotto->getImg()?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $cur_prodotto->getNome() ?></h5>
                            <p class="card-text m-0">Marca - <?php echo $cur_prodotto->getMarca() ?></p>
                            <p class="card-text m-0">Categoria - <?php echo $cur_prodotto->getSubCategoria() . " per " . $cur_prodotto->getCategoria() ?></p>
                            <p class="card-text m-0"> Prezzo - <?php echo $cur_prodotto->getPrezzo() ?> </p>
                            <p>Disponibilità - <?php echo $cur_prodotto->getDisp() ? "Si" : "No" ?></p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</body>

</html>