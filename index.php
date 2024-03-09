<?php
include_once __DIR__ . "/models/Product.php";
include_once __DIR__ . "/models/Pet.php";
include_once __DIR__ . "/models/TypeProducts.php";

$gioco1 = new TypeProducts("Tennis ball", 15.90, new Pet("dog"));
$gioco1->setType("game", "genre: ball");

$cuccia1 = new TypeProducts("cuccia", 50.00, new Pet("cat"));
$cuccia1->setType("cuccia", "width: 120cm");

$product1 = new TypeProducts("collare", 20.80, new Pet("dog"));
$product1->setType("cuccia", null);

$food1 = new TypeProducts("Crocchette", 10.00, new Pet("cat"));
$food1->setType("food", "calories: 200");


$arrayElements = [
    $gioco1,
    $cuccia1,
    $product1,
    $food1
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
            <h1 class="text-center text-uppercase text-secondary-emphasis">
                Pet Shop
            </h1>
        </div>

        <div class="container">

            <div class="row">
                <?php
                foreach ($arrayElements as $element) :
                ?>
                    <div class="col">
                        <div class="card col" style="width: 18rem;">
                            <img src="<?= $element->pet->img ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-capitalize "><?= $element->name ?></h5>
                                <p class="card-text">Price: <?= $element->getPrice() ?>$</p>
                                <a href="#" class="btn btn-primary">Go Shop</a>
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