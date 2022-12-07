<div>Page présentation générale pour tous les coffrets</div>

<?php foreach ($products as $product) : ?>
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="..." alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title"><?= $product['name'] ?></h5>
            <p class="card-text">description <?= $product['description'] ?></p>
            <p class="card-text">Pourcentage d'alcool <?= $product['alcohol_percentage'] ?>%</p>
            <p class="card-text">region de provenance <?= $product['region_name'] ?></p>
            <p class="card-text">Prix Unitaire <?= $product['price'] ?>€</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    <?php endforeach; ?>
    </div>