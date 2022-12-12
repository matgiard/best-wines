<div>Page présentation générale pour les blancs</div>
<div class="container mt-5">
    <div class="row row-cols-1 row-cols-md-4 g-4">
        <?php foreach ($products as $product) : ?>

            
                <div class="card mb-3" style="max-width: 540px; min-height: 300px">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="<?= BASE_DIR ?>/uploads/<?= $product['photo'] ?>" alt="<?= $product['name'] ?>" srcset="" class="img-fluid rounded-start">
                </div>
                <div class="col-md-8">
                    <h5 class="card-title"><?= $product['name'] ?></h5>
                    <p class="card-text">description: <?= $product['description'] ?></p>
                    <p class="card-text">Pourcentage d'alcool: <?= $product['alcohol_percentage'] ?>%</p>
                    <p class="card-text">Région: <?= $product['region_name'] ?></p>
                    <p class="card-text">Prix Unitaire: <?= $product['price'] ?>€</p>
                    <a href="<?= BASE_DIR ?>/nos-vins/detail?name=<?= $product['name'] ?>" class="btn btn-primary position-absolute bottom-0 start-50 translate-middle-x ">Détails</a>
                </div>
            </div>
        </div>
            <?php endforeach; ?>
            </div>
    </div>
    