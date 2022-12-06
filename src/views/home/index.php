<div id='home'>ceci est la page d'accueil depuis view/home/index.php</div>
<a class='btn btn-danger' href="register">ajout utilisateur dans BDD</a>
<a class='btn btn-success' href="product/insert">ajout produit dans BDD</a>
<a class='btn btn-success' href="nos-vins">Nos Vins</a>


<ul>
    <?php foreach ($products as $product) : ?>

        <li><?= $product['name'] ?></li>
        <li><?= $product['description'] ?></li>
        <li><?= $product['alcohol_percentage'] ?>%</li>
        <li><?= $product['id_region'] ?></li>

    <?php endforeach; ?>
</ul>