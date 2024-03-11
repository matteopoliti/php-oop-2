<?php
include_once __DIR__ . "/models/Product.php";
include_once __DIR__ . "/models/Pet.php";
include_once __DIR__ . "/models/TypeProducts.php";
include_once __DIR__ . "/models/Game.php";
include_once __DIR__ . "/models/Cuccia.php";
include_once __DIR__ . "/models/Food.php";
include_once __DIR__ . "/traits/TypeTrait.php";

$gioco1 = new Game("torre di cartone", 35.90, new Pet("cat"), "./img/gioco.jpeg");
$gioco1->setType("game", "genre: building");

$cuccia1 = new Cuccia("cuccia", 60.00, new Pet("dog"), "./img/cuccia.jpeg");
$cuccia1->setType("cuccia", "width: 120cm");

$product1 = new TypeProducts("collare", 19.90, new Pet("dog"), "./img/collare.jpeg");
$product1->setType("Product", null);

$food1 = new Food("Scatolette", 15.00, new Pet("cat"), "./img/cibo.jpeg");
$food1->setType("food", "calories: 200");


$arrayElements = [
    $gioco1,
    $cuccia1,
    $product1,
    $food1,
]


?>


<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP oop 2</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div>
        <div class="bg-light-subtle p-3 mb-4">
            <h1 class="text-center text-uppercase text-warning">
                Pet Shop
            </h1>
        </div>

        <div class="container">

            <div class="row">
                <?php
                foreach ($arrayElements as $element) :
                ?>
                    <div class="col">
                        <div class="card col mb-5" style="width: 18rem;">
                            <img src="<?= $element->getImg() ?>" class="card-img-top" alt="product">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center ">
                                    <h5 class="card-title text-capitalize "><?= $element->name ?></h5>
                                    <img src="<?= $element->pet->img ?>" alt="pet" class="rounded-circle" style="width: 60px;">
                                </div>
                                <p class="card-text"> <?php
                                                        try {
                                                            echo "Price: " . $element->getPrice() . "$";
                                                        } catch (Exception $e) {
                                                            echo 'Eccezione: ' . $e->getMessage();
                                                        }  ?></p>
                                <a href="#" class="btn btn-warning">Go Shop</a>
                            </div>
                            <div class="card-footer text-body-secondary d-flex justify-content-between align-items-center text-capitalize">
                                <p>Type: <?= $element->type ?></p>
                                <p><?= $element->details ?></p>
                            </div>
                        </div>
                    </div>
                <?php
                endforeach
                ?>


            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>