<div id='home'>ceci est la page d'accueil depuis view/home/index.php</div>
<a class='btn btn-danger' href="register">ajout utilisateur dans BDD</a>
<a class='btn btn-success' href="product/insert">ajout produit dans BDD</a>
<a class='btn btn-success' href="nos-vins">Nos Vins</a>


<?php foreach ($products as $product) : ?>
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="..." alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title"><?= $product['name'] ?></h5>
            <p class="card-text">description <?= $product['description'] ?></p>
            <p class="card-text">Pourcentage d'alcool <?= $product['alcohol_percentage'] ?>%</p>
            <p class="card-text">region de provenance <?= $product['region_name'] ?></p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    <?php endforeach; ?>
    </div>